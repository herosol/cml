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
		if($data){
			$this->data['content'] = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
			$this->data['wash_and_dry']  = $this->master->get_data_row('services', ['id'=> '1']);
            $this->data['wash_and_iron'] = $this->master->get_data_row('services', ['id'=> '3']);
            $this->data['dry_cleaning']  = $this->master->get_data_row('services', ['id'=> '4']);
            $this->data['iron_only']     = $this->master->get_data_row('services', ['id'=> '5']);
            $this->data['buly_items']    = $this->master->get_data_row('services', ['id'=> '6']);
            $this->data['deals']         = $this->master->get_data_row('services', ['id'=> '7']);

			$this->load->view('booking/booking',$this->data);
		}else{
			show_404();
		}
    }

    function error()
    {
        $this->load->view("pages/404", $this->data);
    }
}
