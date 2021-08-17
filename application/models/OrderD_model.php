<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderD_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "order_detail";
        $this->field = "id";
    }

}