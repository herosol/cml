<?php
class Booking extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model','page');
    }
    
    function index()
    {
        $meta = $this->page->getMetaContent('booking');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('booking');
        $this->data['selections'] = $selections = $this->session->selections;
        // pr($this->session->selections);
        $this->data['vendor_id'] = $selections['vendor'];
        $this->data['services']  = $selections['selected_service'];
        $this->data['zipcode']   = $selections['zipcode'];
        $this->data['$facility_hours'] = $facility_hours = $this->master->get_data_row('mem_facility_hours', ['mem_id'=> $this->data['vendor_id']]);

        //START END SLEECTED DAY TIME
        $day = $selections['place-order']['collection_date'];
        $dayIndex = explode('-', $day);
        $day = $dayIndex[2].'-'.$dayIndex[0].'-'.$dayIndex[1];
        $day = strtotime($day);
        $day = date('D', $day);
        $day = strtolower($day);
        $key_opening = $day.'_opening';
        $key_closing = $day.'_closing';
        $this->data['collection_opening'] = $facility_hours->$key_opening;
        $this->data['collection_closing'] = $facility_hours->$key_closing;

        $day = $selections['place-order']['delivery_date'];
        $dayIndex = explode('-', $day);
        $day = $dayIndex[2].'-'.$dayIndex[0].'-'.$dayIndex[1];
        $day = strtotime($day);
        $day = date('D', $day);
        $day = strtolower($day);
        $key_opening = $day.'_opening';
        $key_closing = $day.'_closing';
        $this->data['delivery_opening'] = $facility_hours->$key_opening;
        $this->data['delivery_closing'] = $facility_hours->$key_closing;

		if($data)
        {
			$this->data['content'] = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
			$this->data['wash_and_dry']  = $this->master->get_data_row('services', ['id'=> '1']);
            $this->data['wash_and_iron'] = $this->master->get_data_row('services', ['id'=> '3']);
            $this->data['dry_cleaning']  = $this->master->get_data_row('services', ['id'=> '4']);
            $this->data['iron_only']     = $this->master->get_data_row('services', ['id'=> '5']);
            $this->data['buly_items']    = $this->master->get_data_row('services', ['id'=> '6']);
            $this->data['deals']         = $this->master->get_data_row('services', ['id'=> '7']);

			$this->load->view('booking/booking',$this->data);
		}
        else
        {
			show_404();
		}
    }

    function error()
    {
        $this->load->view("pages/404", $this->data);
    }
}
