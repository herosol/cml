<?php

class Buyer extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
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
        
        $this->load->view('buyer/orders', $this->data);
    }
    public function transactions(){

        $this->load->view('buyer/transactions', $this->data);
    }
    public function credits(){

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