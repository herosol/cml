<?php

class Search extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('Pages_model','page');
    }

    public function service_selection()
    {
        if($this->input->post())
        {
            $this->session->unset_userdata('selection');
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
            $this->session->set_userdata('selection', $post);
            exit(json_encode($res));
        }

        $this->data['wash_and_dry']  = $this->master->get_data_row('services', ['id'=> '1']);
        $this->data['wash_and_iron'] = $this->master->get_data_row('services', ['id'=> '3']);
        $this->data['dry_cleaning']  = $this->master->get_data_row('services', ['id'=> '4']);
        $this->data['iron_only']     = $this->master->get_data_row('services', ['id'=> '5']);
        $this->data['buly_items']    = $this->master->get_data_row('services', ['id'=> '6']);
        $this->data['deals']         = $this->master->get_data_row('services', ['id'=> '7']);

        $meta = $this->page->getMetaContent('service_selection');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('service_selection');
		if($data){
			$this->data['content'] = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('pages/service-selection', $this->data);
		}else{
			show_404();
		}

    }

    public function available_vendor()
    {
        $meta = $this->page->getMetaContent('available_vendors');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('available_vendors');
		if($data){
			$this->data['content'] = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->data['selections'] = $selections = $this->session->selection; 
            $this->data['vendors'] = $this->member_model->get_nearby_vendors($selections);
            $this->load->view('pages/quotes', $this->data);
		}else{
			show_404();
		}
    }

    public function vendor_detail($mem_id, $miles)
    {
        check_valid_id('members', $mem_id, 'mem_id');
        $mem_id = doDecode($mem_id);
        $this->data['miles']  = doDecode($miles);
        $this->data['mem_id'] = $mem_id;
        $this->data['selections'] = $selections = $this->session->selection;
        $this->data['vendor'] = $this->member_model->get_row($mem_id);
        $this->data['facility_hours']  = $facility_hours = $this->master->get_data_row('mem_facility_hours', ['mem_id'=> $mem_id]);
        $this->data['estimated_price'] = vendor_service_check($mem_id, $selections['selected_service']);

        $services = [];
        foreach($selections['selected_service'] as $key => $value):
            $services[] = $this->master->get_data_row('sub_services', ['id'=> $value]);
        endforeach;
        
        $this->data['cdays'] = [];
        foreach(weekDays() as $index => $day):
            $key = $day.'_opening';
            if($facility_hours->$key == 'closed'):
                $this->data['cdays'][] = $index;
            endif;
        endforeach;
        
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;
            
            if($this->input->post('use_pickdrop') && $this->input->post('use_pickdrop') == 'on')
            {
                $this->form_validation->set_rules('collection_date', 'Collection Date', 'required', ['required'=> 'Please select collection date.']);
                $this->form_validation->set_rules('collection_time', 'Collection Time', 'required', ['required'=> 'Please select collection time.']);
            }
            
            $this->form_validation->set_rules('delivery_date', 'Delivery Date', 'required', ['required'=> 'Please select delivery date.']);
            $this->form_validation->set_rules('delivery_time', 'Delivery Time', 'required', ['required'=> 'Please select delivery time.']);
            
            $this->data['selections'] = $selections = $this->session->selection;
            $selections['vendor']  = $mem_id;
            
            if($this->form_validation->run() === FALSE) 
            {
                $res['msg'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                $selections['place-order'] = $post;
                if(isset($post['use_pickdrop']))
                {
                    $c_time_indexes = explode(' - ', $post['collection_time']);
                    $d_time_indexes = explode(' - ', $post['delivery_time']);
                    $collection_datetime = $post['collection_date'] . ' ' . $c_time_indexes[1];
                    $delivery_datetime   = $post['delivery_date'] . ' ' .$d_time_indexes[1];

                    $collection_datetime = strtotime(format_date($collection_datetime, 'Y-m-d H:i:s'));
                    $delivery_datetime = strtotime(format_date($delivery_datetime, 'Y-m-d H:i:s'));

                    if($delivery_datetime <= $collection_datetime)
                    {
                        $res['msg'] = 'Please select valid collection and delivery time.';
                        exit(json_encode($res));
                    }
                    else
                    {
                        if($post['use_pickdrop'] == 'on')
                            $selections['pick-or-facility'] = 'pickdrop';
                        else
                            $selections['pick-or-facility'] = 'walkin';
                    }
                        
                }
                else
                {
                    $selections['pick-or-facility'] = 'walkin';
                }
                $this->session->set_userdata('selections', $selections);
    
                $res['msg'] = '';
                $res['redirect_url'] = base_url().'order-booking';
                $res['status'] = 1;
            }
            

            exit(json_encode($res));
        }
        
        $this->data['services'] = $services;

        $meta = $this->page->getMetaContent('vendor_detail');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('vendor_detail');
		if($data){
			$this->data['content'] = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('pages/search', $this->data);
		}else{
			show_404();
		}
    }

}