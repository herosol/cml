<?php

class Search extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    public function service_selection()
    {
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;
            $post = html_escape($this->input->post());
            if(empty($post['selected_service']))
            {
                $res['status'] = 0;
                $res['msg'] = 'Please select any service.';
                exit(json_encode($res));
            }

            $res['msg'] = '';
            $res['redirect_url'] = base_url().'available-vendors';
            $res['status'] = 1;
            $this->session->set_userdata('selection', $this->input->post());
            exit(json_encode($res));
        }

        $this->data['wash_and_dry']  = $this->master->get_data_row('services', ['id'=> '1']);
        $this->data['wash_and_iron'] = $this->master->get_data_row('services', ['id'=> '3']);
        $this->data['dry_cleaning']  = $this->master->get_data_row('services', ['id'=> '4']);
        $this->data['iron_only']     = $this->master->get_data_row('services', ['id'=> '5']);
        $this->data['buly_items']    = $this->master->get_data_row('services', ['id'=> '6']);
        $this->data['deals']         = $this->master->get_data_row('services', ['id'=> '7']);
        $this->load->view('pages/service-selection', $this->data);
    }

    public function available_vendor()
    {
        $this->load->view('pages/quotes', $this->data);
    }

}