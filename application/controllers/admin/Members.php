<?php

class Members extends Admin_Controller {

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
        $this->data['pageView'] = ADMIN . '/members';
        $this->data['rows'] = $this->member->getMembers();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function manage() 
    {
        $this->data['pageView'] = ADMIN . '/members';
        
        if ($this->input->post()) {
            $vals = $this->input->post();
            $mem_row = $this->member->emailExists($vals['mem_email']);
            if (count($mem_row) > -2)
            {
                $vals['mem_pass']=doEncode($vals['mem_pass'] );
                if (($_FILES["mem_profile"]["name"] != "")) {
                    $this->remove_file($this->uri->segment(4), 'mem_profile');
                    $image = upload_image(UPLOADIMAGE,"mem_profile");
                    
                    if (!empty($image['file_name'])) {
                        $vals['mem_profile'] = $image['file_name'];
                        generate_thumb(UPLOADIMAGE , UPLOADIMAGE . "thumbnails/", $image['file_name'],100);
                    } else {
                        pr($image);
                        $this->session->setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                        redirect(ADMIN . '/members/manage/' . $this->uri->segment(4), 'refresh');
                    }
                }
                $mem_id = $this->member->save($vals,$this->uri->segment(4));
                //$this->send_signup_email($mem_id);
                setMsg('success', 'Member has been saved successfully.');
                redirect(ADMIN . '/members', 'refresh');
            }else{
                if ($this->uri->segment(4)){
                     $vals['mem_pass']=doEncode($vals['mem_pass'] );

                    if (($_FILES["mem_profile"]["name"] != "")) {
                        $this->remove_file($this->uri->segment(4), 'mem_profile');
                        $image = upload_image(UPLOADIMAGE . "members/", 'mem_profile');
                        if (!empty($image['file_name'])) {
                            $vals['mem_profile'] = $image['file_name'];
                            generate_thumb(UPLOADIMAGE . "members/", UPLOADIMAGE . "members/thumbnails/", $image['file_name'],100);
                        } else {
                            setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                            redirect(ADMIN . '/members/manage/' . $this->uri->segment(4), 'refresh');
                        }
                    }
                 $mem_id = $this->member->save($vals,$this->uri->segment(4));
                    setMsg('success', 'Member has been saved successfully.');
                    redirect(ADMIN . '/members', 'refresh');
                }else{
                    setMsg('error','Email Already Exits');
                    redirect(ADMIN . '/members/manage', 'refresh');
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
        setMsg('success', 'Member has been activated successfully.');
        redirect(ADMIN . '/members', 'refresh');
    }
    function inactive() 
    {
        $mem_id = $this->uri->segment(4);
        $vals['mem_status'] = '0';
        $this->member->save($vals,$mem_id );

        setMsg('success', 'Member has been deactivated successfully.');
        redirect(ADMIN . '/members', 'refresh');
    }
    function delete() 
    {
        $this->remove_file($this->uri->segment(4));
        $this->member->delete($this->uri->segment('4'));
        setMsg('success', 'Member has been deleted successfully.');
        redirect(ADMIN . '/members', 'refresh');
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