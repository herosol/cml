<?php
class Page extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function about()
    {
        $this->data['right_row'] = $this->master->getRow('sitecontent', array('ckey' => 'right_section'));
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'about'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/about', $this->data);
    }
    function order_success($id)
    {   
        $this->load->model('order_model');
        $id = doDecode($id);
        if($this->data['row'] = $this->order_model->get_admin_order($id)){
            
            $this->data['row']->products = $this->order_model->get_detail($id);
            $this->load->view('pages/order_success', $this->data);
        }
        else
            show_404();
    }
    function trade()
    {   
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'trade'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->data['faqs'] = $this->master->getRows('faqs',array('status'=>1),'','','DESC','sort_order');
        $this->load->view('pages/trade', $this->data);
    }
    function brands()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'brands'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->data['brands'] = $this->master->getRows('brands',array('status'=>1));
        $this->load->view('pages/brands', $this->data);
    }
    function faq()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'faq'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->data['faqs'] = $this->master->getRows('faqs',array('status'=>1),'','','DESC','sort_order');
        $this->load->view('pages/faq', $this->data);
    }
    function contact()
    {
        if ($vals = $this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');
            // $this->form_validation->set_rules('g-recaptcha-response','Robot','required',array('required'=>'Please verify that you are not robot!'));
            if ($this->form_validation->run() === FALSE) {
                $res['status'] = 0;
                $res['msg']=validation_errors();
            } else {
                $vals['msg'] = html_escape($this->input->post('msg'));
                /*$secret = RECAPTCHA_SECRET_KEY;
                $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$vals['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
                if($response['success'] == true){*/
                $vals['created_date']=date('Y-m-d H:i:s');
                $vals['status']=0;
                $this->master->save('contact',$vals);
                $vals['site_email'] = $this->data['site_settings']->site_email;
                $vals['site_noreply_email'] = $this->data['site_settings']->site_noreply_email;
                $okmsg = send_email($vals);
                if ($okmsg) {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                    // $res['redirect_url'] = site_url('contact-us');
                } else {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
                /*}else{
                    $res['msg'] = showMsg('error','Please verify that you are not robot!');
                    $res['redirect_url'] = site_url('contact-us');
                }*/
            }
            exit(json_encode($res));
        } else {
            $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'contact'));
            $this->data['site_content'] = unserialize($this->data['content_row']->code);
            $this->load->view('pages/contact', $this->data);
        }
    }

    function product_detail()
    {
        // $this->data['product-detail'] = $this->master->getRows('product-detail');
        // $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'locations'));
        // $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/product-detail', $this->data);
    }
    function paypal($encoded_id){
        $this->load->library('Paypal_lib');
        $id = intval(doDecode($encoded_id));
        $row = $this->master->getRow('orders',array('id'=>$id));
        // pr($row);
        if($row){
            $this->data['post'] = array(
                "item_name" => "Paypal Payment",
                "currency" => "USD",
                "amount" => $row->total_price,
                "custom" => $id
            );
            // pr($this->data['post']);
            $notify_url = site_url('order-notify') ;
            $this->data['setting']=array(
                "website_name" => "".$this->data['site_settings']->site_name."",
                "url" => "". base_url()."",
                "notify_url" =>"".$notify_url."",
                "return_url" => "".base_url()."success/".$encoded_id,
                "cancel_url" => "".base_url()."cancel/".$encoded_id,
            );
            
            if($this->data['site_settings']->site_paypal_environment):
                $this->data['setting']["sandbox"] = true;
                $this->data['setting']["sandbox_paypal"] = $this->data['site_settings']->site_sandbox_paypal;
            else:
                $this->data['setting']["live_paypal"] = $this->data['site_settings']->site_live_paypal;
            endif;  
            // pr($this->data);
		// die('here');
            $this->load->view("includes/processing", $this->data);
        }
        else
        exit('Access Denied!');
    }
    function cart()
    {
        $this->load->view('pages/cart', $this->data);
    }

    function terms_conditions()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'terms_conditions'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/terms-conditions', $this->data);
    }

    function privacy_policy()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'privacy_policy'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);

        $this->load->view('pages/privacy-policy', $this->data);
    }

    function return_policy()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'return_policy'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);

        $this->load->view('pages/return-policy', $this->data);
    }
    function error()
    {
        $this->load->view("pages/404", $this->data);
    }
}
