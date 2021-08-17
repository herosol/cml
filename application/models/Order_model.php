<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "orders";
        $this->field = "order_id";
    }

    function get_vendor_orders()
    {
        $this->db->from($this->table_name.' o');
        $this->db->join('members m', 'o.buyer_id=m.mem_id');
        $this->db->select('o.*, m.mem_fname, m.mem_lname');
        $this->db->where(['o.vendor_id'=> $this->session->mem_id]);
        $this->db->group_by('o.order_id');
        return $this->db->get()->result();
    }
}