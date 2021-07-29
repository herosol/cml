<?php
class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(21);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 2; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function trade()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_trade';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'trade'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["second_image".$i]["name"]) && $_FILES["second_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'second_image'.$i);
                    if(!empty($image['file_name'])){
                        $vals['second_image'.$i] = $image['file_name'];
                        if (isset($content_row['second_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['second_image'.$i]);
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'trade');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/trade");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'trade'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function about()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'about'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 2; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','about');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/about");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'about'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function contact() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function brands() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_brands';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'brands'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
                
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'brands');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/brands");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'brands'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }



    function terms_conditions() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_terms_conditions';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'terms_conditions');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/terms_conditions");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function privacy_policy() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_privacy_policy';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'privacy_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/privacy_policy");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function return_policy() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_return_policy';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'return_policy'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'return_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/return_policy");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'return_policy'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function products()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_products';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'products'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'products');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/products");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'products'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function faq()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_faq';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'faq'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
           
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'faq');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/faq");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'faq'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function checkout()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_checkout';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'checkout'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'checkout');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/checkout");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'checkout'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function recipes()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_recipes';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'recipes'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'recipes');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/recipes");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'recipes'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }


    public function delete()
    {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name, 'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath)
    {
        if (is_file($filepath))
            unlink($filepath);
        return;
    }

}
?>