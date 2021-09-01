<?php

class Buyer extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('order_model');
        $this->load->model('Master');
    }

    public function dashboard()
    {
        $this->isMemLogged($this->session->mem_type, false, $this->uri->segment(1));
        $mem_id = $this->session->mem_id;
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $post = html_escape($this->input->post());
            $this->form_validation->set_message('integer', 'Please select a valid {field}');

            $this->form_validation->set_rules('mem_fname', 'First name', 'trim|required|alpha|min_length[2]|max_length[20]', ['alpha'=> 'First Name should contains only letters and avoid space.', 'min_length'=> 'First Name should contains atleast 2 letters.', 'max_length'=> 'First Name should not be greater than 20 letters.']);
            $this->form_validation->set_rules('mem_lname', 'Last name', 'trim|required|alpha|min_length[2]|max_length[20]', ['alpha'=> 'Last Name should contains only letters and avoid space.', 'min_length'=> 'Last Name should contains atleast 2 letters.', 'max_length'=> 'Last Name should not be greater than 20 letters.']);
            $this->form_validation->set_rules('mem_phone', 'Phone number', 'trim|required');
            $this->form_validation->set_rules('mem_dob', 'Date of birth', 'trim|required');
            $this->form_validation->set_rules('mem_sex', 'Gender', 'trim|required');
            $this->form_validation->set_rules('mem_country', 'Home Address country', 'trim|required');
            $this->form_validation->set_rules('mem_state', 'Home Address state', 'trim|required');
            $this->form_validation->set_rules('mem_city', 'Home Address city', 'trim|required');
            $this->form_validation->set_rules('mem_zip', 'Home Address zip', 'trim|required');
            $this->form_validation->set_rules('mem_address', 'Home Address', 'trim|required');
            // $this->form_validation->set_rules('mem_address_type', 'Home Address Type', 'required');


            if ($this->form_validation->run() === FALSE)
                $res['msg'] = validation_errors();

            if (!empty($res['msg']))
                exit(json_encode($res));

            if (isset($_FILES["dp_image"]["name"]) && $_FILES["dp_image"]["name"] != "") 
            {
                $image = upload_file(UPLOAD_PATH . 'members', 'dp_image');
                if (!empty($image['file_name'])) 
                {
                    $this->remove_file($mem_id, 'image');
                    generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 100, 'thumb_');
                    generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 300, '300p_');
                } 
                else
                {
                    $res['msg'] = '<p> Please upload a valid image file >> ' . strip_tags($image['error']).'</p>';
                    exit(json_encode($res));
                }
                $post['mem_image'] = $image['file_name'];
            }

            // unset($post['address_type']);
            $post['mem_dob'] = db_format_date($post['mem_dob']);
            $this->member_model->save($post, $mem_id);

            $res['msg'] = showMsg('success', 'Profile update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }

        $this->load->view('buyer/dashboard', $this->data);
    }
    public function orders(){      

        $orders = $this->order_model->get_buyer_orders();
        $services = [];
        foreach($orders as $index => $order):
            $order_detail = $this->master->getRows('order_detail',array('order_id'=> $order->order_id));
            
            
            $orders[$index]->services = $order_detail;
        endforeach;

        $this->data['orders'] = $orders;
        // pr($orders);
        $this->load->view('buyer/orders', $this->data);

    }

    public function order_detail($o_id){
        $o_id = intval(doDecode($o_id));
        $this->data['order'] = $this->master->getRow('orders',array('order_id'=>$o_id));
        $this->data['order_detail'] = $this->master->getRows('order_detail',array('order_id'=>$o_id));
        $this->data['delivery_proof'] = $this->master->getRow('order_delivery_proof',array('order_id'=>$o_id,'status'=>'pending'));   
        $this->load->view('buyer/order-detail', $this->data);
    }

    public function accept($proof_id){
        $proof_id = intval(doDecode($proof_id));
        // pr($proof_id);

        $proof = $this->master->getRow('order_delivery_proof',array('proof_id'=>$proof_id));
        
        $arr['order_status']='completed';
        $this->master->save('orders',$arr,'order_id',$proof->order_id);
        $proof_data['status']='accepted';
        $this->master->save('order_delivery_proof',$proof_data,'proof_id',$proof_id);
        setMsg('success', 'Delivery Proof Accepted Successfully.');
        redirect('buyer/order_detail/'.doEncode($proof->order_id), 'refresh');
    }

    public function reject($proof_id){
        $proof_id = intval(doDecode($proof_id));
        $proof = $this->master->getRow('order_delivery_proof',array('proof_id'=>$proof_id));
        $proof_data['status']='rejected';
        $this->master->save('order_delivery_proof',$proof_data,'proof_id',$proof_id);
        setMsg('success', 'Delivery Proof Rejected Successfully.');
        redirect('buyer/order_detail/'.doEncode($proof->order_id), 'refresh');
    }

    public function transactions(){
        $this->load->view('buyer/transactions', $this->data);
    }

    public function credits(){
        $buyer_id = $this->session->mem_id;
        $total_orders = intval($this->master->num_rows('orders',array('order_status'=>'completed','buyer_id'=>$buyer_id)));
        $cal_orders = $total_orders % 10;
        
        $this->data['orders'] = $this->master->getRows('orders',array('order_status'=>'completed','buyer_id'=>$buyer_id),'',$cal_orders,'desc','order_id');
        // pr($this->data['orders']);
        $this->load->view('buyer/credits', $this->data);
    }

    
    ### REMOVE FILE
    private function remove_file($id, $type = '')
    {
        $obj = $this->member_model->get_row($id);
        $filepath = UPLOAD_PATH . "members/" . $obj->mem_image;
        $filepath_thumb = UPLOAD_PATH . "members/thumb_" . $obj->mem_image;
        $filepath_300p = UPLOAD_PATH . "members/300p_" . $obj->mem_image;
        if (is_file($filepath))
            unlink($filepath);

        if (is_file($filepath_thumb))
            unlink($filepath_thumb);

        if (is_file($filepath_300p))
            unlink($filepath_300p);
        return;
    }

}