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
        $this->load->view('vendor/dashboard');
    }

}