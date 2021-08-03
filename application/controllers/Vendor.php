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
        $this->isMemLogged($this->session->mem_type, false, $this->uri->segment(1));
        $mem_id = $this->session->mem_id;
        if($this->input->post())
        {
            $res = [];
            $user_info = [];
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
            if($post['mem_company_walkin_facility'] == 'yes')
            {
                $this->form_validation->set_rules('mem_business_country', 'Business country', 'trim|required');
                $this->form_validation->set_rules('mem_business_state', 'Business state', 'trim|required');
                $this->form_validation->set_rules('mem_business_city', 'Business city', 'trim|required');
                $this->form_validation->set_rules('mem_business_zip', 'Business zip', 'trim|required');
                $this->form_validation->set_rules('mem_business_address', 'Business address', 'trim|required');
            }
            $this->form_validation->set_rules('mem_charges_per_miles', 'Charges per mils', 'trim|required');
            $this->form_validation->set_rules('mem_charges_free_over', 'Charges free over', 'trim|required');
            $this->form_validation->set_rules('mem_charges_min_order', 'Minimum order value', 'trim|required');
            $this->form_validation->set_rules('mem_show_cancellation', 'Show cancellation policy', 'trim|required');


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
                $user_info['mem_image'] = $image['file_name'];
            }

            # MEMBER INFO TO BE SAVE
            $user_info['mem_company_name']        = $post['mem_company_name'];
            $user_info['mem_company_email']       = $post['mem_company_email'];
            $user_info['mem_company_phone']       = $post['mem_company_phone'];
            $user_info['mem_company_order_email'] = $post['mem_company_order_email'];
            $user_info['mem_company_website']     = $post['mem_company_website'];
            $user_info['mem_company_trustpilot']  = $post['mem_company_trustpilot'];
            $user_info['mem_company_pickdrop']    = $post['mem_company_pickdrop'];
            $user_info['mem_company_walkin_facility'] = $post['mem_company_walkin_facility'];
            $user_info['mem_business_country'] = $post['mem_business_country'];
            $user_info['mem_business_state']   = $post['mem_business_state'];
            $user_info['mem_business_city']    = $post['mem_business_city'];
            $user_info['mem_business_zip']     = $post['mem_business_zip'];
            $user_info['mem_business_address'] = $post['mem_business_address'];
            if($post['mem_company_walkin_facility'] == 'yes')
            {
                $user_info['mem_map_lat'] = $post['mem_map_lat'];
                $user_info['mem_map_lng'] = $post['mem_map_lng'];
            }
            $user_info['mem_charges_per_miles'] = $post['mem_charges_per_miles'];
            $user_info['mem_charges_free_over'] = $post['mem_charges_free_over'];
            $user_info['mem_charges_min_order'] = $post['mem_charges_min_order'];
            $user_info['mem_show_cancellation'] = $post['mem_show_cancellation'];
            $user_info['mem_travel_radius']     = $post['mem_travel_radius'];

            $this->member_model->save($user_info, $mem_id);

            # MEMBER FACILITY HOURS
            $facility_hours['mon_opening'] = $post['mon_opening'] == '' ? NULL : $post['mon_opening'];
            $facility_hours['mon_closing'] = $post['mon_closing'] == '' ? NULL : $post['mon_closing'];
            $facility_hours['tue_opening'] = $post['tue_opening'] == '' ? NULL : $post['tue_opening'];
            $facility_hours['tue_closing'] = $post['tue_closing'] == '' ? NULL : $post['tue_closing'];
            $facility_hours['wed_opening'] = $post['wed_opening'] == '' ? NULL : $post['wed_opening'];
            $facility_hours['wed_closing'] = $post['wed_closing'] == '' ? NULL : $post['wed_closing'];
            $facility_hours['thu_opening'] = $post['thu_opening'] == '' ? NULL : $post['thu_opening'];
            $facility_hours['thu_closing'] = $post['thu_closing'] == '' ? NULL : $post['thu_closing'];
            $facility_hours['fri_opening'] = $post['fri_opening'] == '' ? NULL : $post['fri_opening'];
            $facility_hours['fri_closing'] = $post['fri_closing'] == '' ? NULL : $post['fri_closing'];
            $facility_hours['sat_opening'] = $post['sat_opening'] == '' ? NULL : $post['sat_opening'];
            $facility_hours['sat_closing'] = $post['sat_closing'] == '' ? NULL : $post['sat_closing'];
            $facility_hours['sun_opening'] = $post['sun_opening'] == '' ? NULL : $post['sun_opening'];
            $facility_hours['sun_closing'] = $post['sun_closing'] == '' ? NULL : $post['sun_closing'];
            if($this->master->num_rows('mem_facility_hours', ['mem_id'=> $mem_id]) > 0)
            {
                $this->master->save('mem_facility_hours', $facility_hours, 'mem_id', $mem_id);
            }
            else
            {
                $facility_hours['mem_id'] = $mem_id;
                $this->master->save('mem_facility_hours', $facility_hours);
            }

            $res['msg'] = showMsg('success', 'Profile update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }

        $this->data['facility_hours'] = $this->master->get_data_row('mem_facility_hours', ['mem_id'=> $mem_id]);
        $this->load->view('vendor/dashboard', $this->data);
    }

    public function price_list()
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

    public function get_location_and_initmap()
    {
        if($this->input->post())
        {
            $res = [];
            $coordinates = get_location_detail(trim($this->input->post('mem_business_zip')));
            echo json_encode(['status'=> 'success', 'mem_map_lat'=> $coordinates->Latitude, 'mem_map_lng'=> $coordinates->Longitude]);
            exit;
        }
        echo json_encode(['status'=> 'failed', 'lat'=> '', 'long'=> '']);
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