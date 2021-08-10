<?php

class Vendors extends Admin_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->isLogged();
        $this->load->model('master');
        $this->load->model('Member_model','member');
    }

    public function index() 
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/vendors';
        $this->data['rows'] = $this->member->getMembers(array('mem_type'=>'Vendor'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function manage() 
    {
        $this->data['pageView'] = ADMIN . '/vendors';
        
        if ($this->input->post()) {
            $vals = $this->input->post();
            $mem_row = $this->member->emailExists($vals['mem_email']);
            if (count($mem_row) > -2)
            {
                $vals['mem_pswd']=doEncode($vals['mem_pswd'] );
                if (($_FILES["dp_image"]["name"] != "")) {
                    $this->remove_file($this->uri->segment(4), 'dp_image');
                    $image = upload_file(UPLOAD_PATH . 'members', 'dp_image');
                    if (!empty($image['file_name'])) {
                        $vals['mem_image'] = $image['file_name'];
                        generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 100, 'thumb_');
                        generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 300, '300p_');
                    } else {
                        setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                        redirect(ADMIN . '/vendors/manage/' . $this->uri->segment(4), 'refresh');
                    }
                }
                $mem_id = $this->member->save($vals,$this->uri->segment(4));
                //$this->send_signup_email($mem_id);
                setMsg('success', 'Vendor has been saved successfully.');
                redirect(ADMIN . '/vendors', 'refresh');
            }else{
                if ($this->uri->segment(4)){
                     $vals['mem_pass']=doEncode($vals['mem_pass'] );

                    if (($_FILES["dp_image"]["name"] != "")) {
                        $this->remove_file($this->uri->segment(4), 'dp_image');
                        $image = upload_file(UPLOAD_PATH . 'members', 'dp_image');
                        if (!empty($image['file_name'])) {
                            $vals['mem_image'] = $image['file_name'];
                            generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 100, 'thumb_');
                            generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 300, '300p_');
                        } else {
                            setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                            redirect(ADMIN . '/members/manage/' . $this->uri->segment(4), 'refresh');
                        }
                    }
                 $mem_id = $this->member->save($vals,$this->uri->segment(4));
                    setMsg('success', 'Vendor has been saved successfully.');
                    redirect(ADMIN . '/vendors', 'refresh');
                }else{
                    setMsg('error','Email Already Exits');
                    redirect(ADMIN . '/vendors/manage', 'refresh');
                }
            }
        }

        $this->data['row'] = $this->member->getMember($this->uri->segment('4'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function active() 
    {
        $mem_id = $this->uri->segment(4);
        $vals['mem_status'] = '1';
        $this->member->save($vals,$mem_id);
        setMsg('success', 'Vendor has been activated successfully.');
        redirect(ADMIN . '/vendors', 'refresh');
    }
    function inactive() 
    {
        $mem_id = $this->uri->segment(4);
        $vals['mem_status'] = '0';
        $this->member->save($vals,$mem_id );

        setMsg('success', 'Vendor has been deactivated successfully.');
        redirect(ADMIN . '/vendors', 'refresh');
    }
    function delete() 
    {
        $this->remove_file($this->uri->segment(4));
        $this->member->delete($this->uri->segment('4'));
        setMsg('success', 'Vendor has been deleted successfully.');
        redirect(ADMIN . '/vendors', 'refresh');
    }

    function remove_file($id, $type = '') 
    {
        $arr = $this->member->getMember($id);
        $filepath = "./" . SITE_IMAGES . "/members/" . $arr->mem_profile;
        $filepath_thumb = "./" . SITE_IMAGES . "/members/thumbnails/thumb_" . $arr->mem_profile;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($filepath_thumb)) {
            unlink($filepath_thumb);
        }
        return;
    }
}
?>