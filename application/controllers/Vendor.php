<?php

class Vendor extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    public function dashboard()
    {
        $this->isMemLogged($this->session->mem_type);
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

            $this->form_validation->set_rules('mem_company_name', 'Company name', 'trim|required');
            $this->form_validation->set_rules('mem_company_email', 'Company email', 'trim|required|valid_email');
            $this->form_validation->set_rules('mem_company_phone', 'Company phone', 'trim|required');
            $this->form_validation->set_rules('mem_company_order_email', 'Company order email', 'trim|required|valid_email');
            $this->form_validation->set_rules('mem_company_website', 'Company website', 'trim|required');
            $this->form_validation->set_rules('mem_company_trustpilot', 'Trustpilot And Google Review URL', 'trim|required');
            $this->form_validation->set_rules('mem_company_pickdrop', 'Company Pickup & Drop', 'trim|required');
            $this->form_validation->set_rules('mem_company_walkin_facility', 'Company walk in facility', 'trim|required');
            $this->form_validation->set_rules('mem_business_country', 'Business country', 'trim|required');
            $this->form_validation->set_rules('mem_business_state', 'Business state', 'trim|required');
            $this->form_validation->set_rules('mem_business_city', 'Business city', 'trim|required');
            $this->form_validation->set_rules('mem_business_zip', 'Business zip', 'trim|required');
            $this->form_validation->set_rules('mem_business_address', 'Business address', 'trim|required');
            $this->form_validation->set_rules('mem_country', 'Address country', 'trim|required');
            $this->form_validation->set_rules('mem_state', 'Address state', 'trim|required');
            $this->form_validation->set_rules('mem_city', 'Address city', 'trim|required');
            $this->form_validation->set_rules('mem_zip', 'Address zip', 'trim|required');
            $this->form_validation->set_rules('mem_address', 'Address', 'trim|required');
            $this->form_validation->set_rules('mem_charges_per_miles', 'Charges per mils', 'trim|required');
            $this->form_validation->set_rules('mem_charges_free_over', 'Charges free over', 'trim|required');
            $this->form_validation->set_rules('mem_charges_min_order', 'Minimum order value', 'trim|required');
            $this->form_validation->set_rules('mem_show_cancellation', 'Show cancellation policy', 'trim|required');


            if ($this->form_validation->run() === FALSE)
                $res['msg'] = validation_errors();

            if (!empty($res['msg']))
                exit(json_encode($res));

            if (isset($_FILES["dp_image"]["name"]) && $_FILES["dp_image"]["name"] != "") {
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

            $this->member_model->save($post, $mem_id);

            $res['msg'] = showMsg('success', 'Profile update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }

        $this->load->view('vendor/dashboard', $this->data);
    }

    public function price_list()
    {
        $this->isMemLogged($this->session->mem_type);
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $post = html_escape($this->input->post());
            if ($this->form_validation->run() === FALSE)
                $res['msg'] = validation_errors();

            if (!empty($res['msg']))
                exit(json_encode($res));

            foreach($post['sub_service'] as $sub_service_id => $sub_service):
                $price = 
                [
                    'sub_service_id' => $sub_service_id,
                    'price'          => $sub_service['price'] == '' ? '0' : $sub_service['price'],
                    'mem_id'         => $this->session->mem_id   
                ];

                $row = $this->master->get_data_row('price_list', ['sub_service_id'=> $sub_service_id, 'mem_id'=> $this->session->mem_id]); 
                if(count($row) > 0)
                    $this->master->save('price_list', $price, 'id', $row->id);
                else
                    $this->master->save('price_list', $price);
                    
            endforeach;

            $res['msg'] = showMsg('success', 'Price list update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }

        $this->data['wash_and_dry']  = $this->master->get_data_row('services', ['id'=> '1']);
        $this->data['wash_and_iron'] = $this->master->get_data_row('services', ['id'=> '3']);
        $this->data['dry_cleaning']  = $this->master->get_data_row('services', ['id'=> '4']);
        $this->data['iron_only']     = $this->master->get_data_row('services', ['id'=> '5']);
        $this->data['buly_items']    = $this->master->get_data_row('services', ['id'=> '6']);
        $this->data['deals']         = $this->master->get_data_row('services', ['id'=> '7']);
        $this->load->view('vendor/price-list', $this->data);
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