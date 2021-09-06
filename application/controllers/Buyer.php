<?php

class Buyer extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('order_model');
        $this->load->model('orderd_model');
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
    public function orders()
    {      
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
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

    public function order_detail($o_id)
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        $o_id = intval(doDecode($o_id));
        $this->data['order'] = $this->master->getRow('orders',array('order_id'=>$o_id));
        $this->data['order_detail'] = $this->master->getRows('order_detail',array('order_id'=>$o_id, 'service_type'=> 'basic'));
        $this->data['amended'] = $this->orderd_model->get_rows(['order_id'=> $o_id, 'service_type'=> 'amended']);
        $this->data['delivery_proof'] = $this->master->getRow('order_delivery_proof',array('order_id'=>$o_id,'status'=>'pending'));   
        $this->load->view('buyer/order-detail', $this->data);
    }

    public function accept_proof_delivery()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;
            // pr($_POST);
            $post = html_escape($this->input->post());
            $this->form_validation->set_rules('review_comment', 'Comment', 'trim|required');

            if ($this->form_validation->run() === FALSE)
                $res['msg'] = validation_errors();

            if (!empty($res['msg']))
                exit(json_encode($res));

            $proof_id = intval(doDecode($post['proof_id']));
            $proof = $this->master->getRow('order_delivery_proof', ['proof_id'=>$proof_id]);

            $this->order_model->save(['order_status'=> 'Completed', 'completed_date'=> date('Y-m-d')], $proof->order_id);
            $proof_data['status'] = 'accepted';
            $this->master->save('order_delivery_proof', $proof_data, 'proof_id', $proof_id);

            //EARNING AMOUNT
            $order   = $this->order_model->get_row($proof->order_id);
            $amended_price = $this->orderd_model->order_amended_price($proof->order_id);
            $amended_price = price_format($amended_price);
            $price = price_format($order->order_total_price + $amended_price);
            $earning_amount = price_format($price - ( ($order->site_percentage / 100) * $price ));

            $review['mem_id']   = $order->vendor_id;
            $review['rating']   = $post['rating'];
            $review['order_id'] = $proof->order_id;
            $review['review_comment'] = $post['review_comment'];

            $is_added = $this->master->save('reviews', $review);
            $earning = [];
            if($is_added)
            {
                $earning['order_id'] = $proof->order_id;
                $earning['mem_id']   = $order->vendor_id; 
                $earning['amount']   = $earning_amount; 
            }

            $this->master->save('earnings', $earning);
            //RATING
            $res['msg'] = showMsg('success', 'Request accepted successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }
    }

    public function reject_proof_delivery()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;
            
            $post = html_escape($this->input->post());
            $proof_id = intval(doDecode($post['proof_id']));
            $proof_data['status'] = 'rejected';
            $this->master->save('order_delivery_proof', $proof_data, 'proof_id', $proof_id);

            //RATING
            $res['msg'] = showMsg('success', 'Request rejected successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }
    }

    
    public function transactions()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        $this->load->view('buyer/transactions', $this->data);
    }

    public function credits()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        $buyer_id = $this->session->mem_id;
        $total_orders = intval($this->master->num_rows('orders',array('order_status'=>'completed','buyer_id'=>$buyer_id)));
        $cal_orders = $total_orders % 10;
        
        $this->data['orders'] = $this->master->getRows('orders',array('order_status'=>'completed','buyer_id'=>$buyer_id),'',$cal_orders,'desc','order_id');
        // pr($this->data['orders']);
        $this->load->view('buyer/credits', $this->data);
    }

    ### PAY AMENDED INVOICE AMOUNT METHODS
    public function pay_amend_invoice()
    {
        $post = html_escape($this->input->post());
        $amended_records = $this->orderd_model->get_rows(['order_id'=> doDecode($post['order_id']), 'service_type'=> 'amended']);
        $amend_pending = 0;
        foreach($amended_records as $key => $row):
            if(check_amend_item_pay_status($row->order_id, $row->id) == 'Pending')
            {
                $amend_pending += price_format($row->sub_service_price*$row->quantity);
            }
        endforeach;

        // echo price_format($amend_pending); die;

        if ($post['payment_type'] == 'credit-card') 
        {
            include_once APPPATH . "libraries/stripe/init.php";
            \Stripe\Stripe::setApiKey(API_SECRET_KEY);
            try {
                if (!isset($post['nonce']))
                    throw new Exception("The Stripe Token was not generated correctly");

                $cents   = $amend_pending*100;
                $charge = \Stripe\Charge::create([
                    "amount"      => $cents,
                    "currency"    => "gbp",
                    "source"      => $post['nonce'],
                    "description" => "Customer Charge",
                    "statement_descriptor" => "Paid successfully"
                ]);
            }
            catch (Exception $e)
            {
                $res['msg']    = $e->getMessage();
                $res['status'] = 0;
                exit(json_encode($res));
            }

            $amended_item_ids = [];
            foreach($amended_records as $key => $row):
                if(check_amend_item_pay_status($row->order_id, $row->id) == 'Pending')
                {
                    $amended_item_ids[] = $row->id;
                }
            endforeach;

            $amended_item_ids = implode(',', $amended_item_ids);
            
            $order_invoice = [];
            $order_invoice['order_id']  = doDecode($post['order_id']);
            $order_invoice['charge_id'] = $charge['id'];
            $order_invoice['payment_method']   = 'stripe';
            $order_invoice['amended_item_ids'] = $amended_item_ids;
            $order_invoice['invoice_type']     = 'amended';
            $order_invoice['payment_status']   = 'paid';
            $this->master->save('order_invoices', $order_invoice);
        }

        if (doDecode($post['order_id']) > 0)
        {
            if ($post['payment_type'] == 'credit-card') 
            {
                $res['msg'] = 'Your order has been completed successfully. We will contact you shortly.';
                $res['status'] = 1;
                // $res['redirect_url'] = base_url('order_success/'.doEncode($order_id));
            }
            else
            {
                $res['msg'] = 'Your order has been completed successfully. Your are reditect to paypal for payment';
                $res['status'] = 1;
                $res['redirect_url'] = base_url('paypal/'.doEncode($order_id));
            }
        }
        else
        {
            $res['status'] = 0;
            $res['msg'] = 'Your order has not been completed successfully. Please try again';
        }

        exit(json_encode($res));
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