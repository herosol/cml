<?php

class Index extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    function index()
    {
        $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'home'));
        $this->data['site_content'] = unserialize($this->data['site_content']->code);
        $this->load->view("pages/index", $this->data);
    }

    function signin()
    {
        //$this->MemLogged();
        if($this->input->post()) {
            $res = array();
            $res['frm_reset'] = 0;
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['redirect_url'] = 0;
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() === FALSE) 
            {
                $res['msg'] = validation_errors();
            }
            else
            {
                $data = $this->input->post();
                $row = $this->member_model->authenticate($data['email'], $data['password']);
                if (count($row) > 0) 
                {
                    if($row->mem_status== 0)
                    {
                        $res['msg'] = showMsg('error', 'Your account has been blocked!');
                        exit(json_encode($res));
                    }

                    $remember_token = '';
                    if(isset($data['remeberMe']))
                    {
                        $remember_token = doEncode('member-'.$row->mem_id);
                        $cookie= array('name'   => 'remember', 'value'  => $remember_token, 'expire' => (86400*7));
                        $this->input->set_cookie($cookie);
                    }

                    $this->member_model->update_last_login($row->mem_id, $remember_token);
                    $this->session->set_userdata('mem_id', $row->mem_id);
                    $this->session->set_userdata('mem_type', $row->mem_type);
                    
                    if($row->mem_type == 'vendor')
                    {
                        $res['redirect_url'] = base_url().'vendor/dashboard';
                    }
                    else
                    {
                        $res['redirect_url'] = base_url().'buyer/dashboard';
                    }

                    $res['msg'] = showMsg('success', 'Login successful! Please wait...');

                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
                else
                {
                    $res['msg'] = '<p>Invalid email or password</p>';
                }
            }
            exit(json_encode($res));
        }
        else
        {
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'login'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("auth/signin", $this->data);
        }
    }

    function signup_as()
    {
        $this->load->view('auth/signup-as');
    }

    function signup($as)
    { 
        //$this->MemLogged();
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['frm_reset'] = 0;
            $res['status'] = 0;

            $this->form_validation->set_rules('mem_fname', 'First Name', 'trim|required|alpha|min_length[2]|max_length[20]', ['alpha'=> 'First Name should contains only letters and avoid space.', 'min_length'=> 'First Name should contains atleast 2 letters.', 'max_length'=> 'First Name should not be greater than 20 letters.']);
            $this->form_validation->set_rules('mem_lname', 'Last Name', 'trim|required|alpha|min_length[2]|max_length[20]', ['alpha'=> 'Last Name should contains only letters and avoid space.', 'min_length'=> 'Last Name should contains atleast 2 letters.', 'max_length'=> 'Last Name should not be greater than 20 letters.']);
            $this->form_validation->set_rules('mem_email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|callback_is_password_strong', ['is_password_strong'=> 'Password should contains alteast 1 small letter, 1 capital letter, 1 number, and one special characher.']);
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]', ['matches'=> 'Confirm password must be the as the password.']);
            $this->form_validation->set_rules('confirm', 'Confirm', 'required', ['required' => 'Please accept our terms and conditions.']);
            if($this->form_validation->run() === FALSE)
            {
                $res['msg'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                $mem_row = $this->member_model->emailExists($post['mem_email']);
                if (count($mem_row) == '0')
                {
                    $rando = doEncode(rand(99, 999).'-'.$post['email']);
                    $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;
                    $save_data = [
                        'mem_fname' => ucfirst($post['mem_fname']),
                        'mem_lname' => ucfirst($post['mem_lname']),
                        'mem_email' => $post['mem_email'],
                        'mem_pswd' => doEncode($post['password']),
                        'mem_code' => $rando,
                        'mem_type' => $as,
                        'mem_status' => 1,
                        'mem_last_login' => date('Y-m-d h:i:s')
                    ];

                    $mem_id = $this->member_model->save($save_data);
                    $this->session->set_userdata('mem_id', $mem_id);
                    $this->session->set_userdata('mem_type', 'buyer');

                    $res['msg'] = showMsg('success', getSiteText('alert', 'registration'));

                    $verify_link = site_url('verification/' .$rando);
                    $mem_data = array('name' => ucfirst($post['mem_fname']).' '.ucfirst($post['mem_lname']), "email" => $post['mem_email'], "link" => $verify_link);
                    $this->send_site_email($mem_data, 'signup');

                    $res['redirect_url'] = site_url('email-verification');
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                }
                else
                {
                    $res['msg'] = '<p>E-mail Address Already In Use</p>';
                }
            }
            exit(json_encode($res));
        }
        else
        {
            if($as != 'buyer' && $as != 'vendor')
            {
                show_404();
            }
            $this->data['as'] = ucfirst($as);
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'signup'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("auth/signup", $this->data);
        }
    }

    function forgot_password()
    {
        //$this->MemLogged();
        if ($this->input->post()) 
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if($this->form_validation->run() === FALSE)
            {
                $res['msg'] = validation_errors();
                $res['status'] = 0;
            }
            else
            {
                $post    = $this->input->post();
                if ($mem = $this->member_model->forgotEmailExists($post['email'])) 
                {
                    $rando = doEncode(randCode(rand(15, 20)));
                    $this->master->save('members', array('mem_code' => $rando), 'mem_id', $mem->mem_id);

                    $reset_link = site_url('reset/' . $rando);
                    $mem_data = array('name' => $mem->mem_fname.' '.$mem->mem_lname, "email" => $mem->mem_email, "link" => $reset_link);
                    $this->send_site_email($mem_data, 'forgot_password');

                    $res['msg'] = showMsg('success','We’ve sent a reset password link to the email address you entered to reset your password. If you don’t see the email, check your spam folder or email!');
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                }
                else
                {
                    $res['msg'] = '<p>No such email address exists. Please try again.</p>';
                    $res['status'] = 0;
                }
            }
            exit(json_encode($res));
        }
        else
        {
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'forgot'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("auth/forgot-password", $this->data);
        }
    }

    function reset($vcode)
    {
        if ($row = $this->member_model->getMemCode($vcode)) 
        {
            $this->member_model->save(array('mem_code' => ''), $row->mem_id);
            $this->session->set_userdata('reset_id', $row->mem_id);
            redirect('reset-password', 'refresh');
            exit;
        }
        else
        {
            redirect('', 'refresh');
            exit;
        }
    }

    function reset_password()
    {
        $reset_id = intval($this->session->userdata('reset_id'));
        if ($row = $this->member_model->getMember($reset_id))
        {
            if ($this->input->post())
            {
                $res = array();
                $res['hide_msg'] = 0;
                $res['scroll_to_msg'] = 0;
                $res['status'] = 0;
                $res['frm_reset'] = 0;
                $res['redirect_url'] = 0;

                $reset_id = intval($this->session->userdata('reset_id'));
                if ($row = $this->member_model->getMember($reset_id))
                {
                    $this->form_validation->set_rules('pswd', 'New Password', 'required|min_length[8]|callback_is_password_strong', ['is_password_strong'=> 'Password should contains alteast 1 small letter, 1 capital letter, 1 number, and one special characher.']);
                    $this->form_validation->set_rules('cpswd', 'Confirm Password', 'required|matches[pswd]', ['matches'=> 'Confirm password must be the as the password.']);
                    if($this->form_validation->run() === FALSE)
                    {
                        $res['msg'] = validation_errors();
                    }
                    else
                    {
                        $post = html_escape($this->input->post());
                        $this->member_model->save(array('mem_pswd' => doEncode($post['pswd'])), $reset_id);
                        $this->session->unset_userdata('reset_id');
                        $res['msg'] = showMsg('success', 'You have successfully reset your password.');

                        $res['redirect_url'] = site_url('signin');
                        $res['status'] = 1;
                        $res['frm_reset'] = 1;
                        $res['hide_msg'] = 1;
                    }
                }
                else
                {
                    $res['msg'] = '<p>Something is wrong, try again later.</p>';
                }
                exit(json_encode($res));
            }
            else
            {
                $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'reset'));
                $this->data['site_content'] = unserialize($this->data['site_content']->code);
                $this->load->view("auth/reset-password", $this->data);
            }
        }
        else
        {
            redirect('', 'refresh');
            exit;
        }
    }

    function verification($vcode = '')
    {
        // $this->MemLogged();
        if ($row = $this->member_model->getMemCode($vcode, intval($this->session->mem_id))) {
            if ($this->session->has_userdata('mem_id') && $this->session->mem_id != $row->mem_id) {
                setMsg('info', 'You are already logged in with different email!');
                redirect('dashboard', 'refresh');
                exit;
            }
            $this->member_model->save(array('mem_verified' => 1, 'mem_code' => ''), $row->mem_id);
            
            // $redirect_url = $this->session->mem_type == 'buyer' ? 'account-settings' : 'dashboard';
            setMsg('success', 'Your account has been successfully verified!');
            redirect('dashboard', 'refresh');
            exit;
        } else {
            redirect('', 'refresh');
            exit;
        }
    }

    function logout()
    {
        $this->session->unset_userdata('mem_id');
        $this->session->unset_userdata('mem_type');
        $this->session->unset_userdata('redirect_url');
        $this->load->helper('cookie');
        delete_cookie('remember');
        redirect('login', 'refresh');
        exit;
    }
 
    ### callback functions
    public function is_password_strong($password)
    {
        $whiteListedSpecial = "\$\@\#\^\|\!\~\=\+\-\_\.";
        if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password) && preg_match('/['.$whiteListedSpecial.']/', $password)) {
            return TRUE;
        }
        return FALSE;
    }
    
}

?>