<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

function __construct(){
parent:: __construct();
            $this->load->model('login');
            $this->load->model('user_model');
}
  
    public function index(){
        $this->load->helper('form');
        $this->load->helper('email');
        $this->load->library('form_validation');
        $this->load->view('login');
      }
    
    public function login(){

        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','User Name','required');
        $this->form_validation->set_rules('password','Password','required');
//        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if($this->form_validation->run()==TRUE)
        {

            $name=$this->security->xss_clean($this->input->post('name'));
            $password=$this->security->xss_clean(md5($this->input->post('password')));
//            $email=$this->security->xss_clean($this->input->post('email'));


            $record=$this->login->dologin($name,$password);

            if(!empty($record)){
                
                $session_data=array(
                'user_id'=> $record['id'],
                'name'=>$record['name'],
//                'email'=>$record['email'],
                'validated' => true
                );
                
                $this->session->set_userdata($session_data);
                
//                if(!$this->session->userdata('validated')){}
                    
//                    echo $session_data['username'];
//                    exit();
//                    
                    redirect('admin/Dashboard/index');
                
                
                

            }
            else{
						$data['msg'] = 'Invalid username and/or password.';
						$this->load->view('login', $data);
            }
            
            
            
        }
        else{
            $this->load->view('login');
        }
        
        

        
    }
    
    
	public function change_password($customer_id = NULL){
        
        //echo "there".$customer_id;
        //echo "<pre>";
        //echo $this->session->userdata['userid'];
        //var_dump($this->session->userdata);
        //exit;
			if(! $this->session->userdata('validated')){
				redirect('auth');
			}else{
				
				$data['page'] = 'password';
				$this->load->helper('form');
				$this->load->library('form_validation');
				
				
				$this->form_validation->set_rules('old_password', 'Old Password', 'required');
				$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
				$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|matches[new_password]');
				
				
			
				if ($this->form_validation->run() === FALSE)
				{
						$this->load->view('admin/templates/header', $data);
						$this->load->view('admin/templates/sidebar', $data);
						$this->load->view('admin/change_password', $data);
						$this->load->view('admin/templates/footer', $data);
					
			
				}
				else
				{
					
					if($this->user_model->validate_admin_pass()){
						
						$this->user_model->update_admin_password();	
						$this->session->set_flashdata('msg', 'New password is updated Successfully!');			
						redirect('auth/change_password');
					}else{
						
						$this->load->view('admin/templates/header', $data);
						$this->load->view('admin/templates/sidebar', $data);
						$this->load->view('admin/change_password', $data);
						$this->load->view('admin/templates/footer', $data);
						
					}
					
				}
			}
			
			
			
		}
    
    
	public function forgot_password(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$sitesettings=getsitedata();     
        $adminemail=$sitesettings->a_email;
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if ($this->form_validation->run() === FALSE)
		{
				$this->load->view('admin/forgot_password');
						
		}
		else
        {
			if(!$this->user_model->validate_email()){
				$data['msg'] = 'Email Does not Match!';
				$this->load->view('admin/forgot_password', $data);
			}elseif($this->user_model->validate_email()){
                
                $user_info=$this->user_model->validate_email();
                $pass = $this->user_model->randomPassword();
                $this->user_model->update_admin_password_by_email($pass);
                
				
				$master_email = $this->config->item('master_email');
				$master_name = $this->config->item('master_name');
				
				$message = "Your password has been reset!<br /><br />
				User Name: ".$user_info['name']."
				<br />Your New password is: ".$pass;
$subject="Forgot Password";
				send_email_custom($this->input->post('email'), $adminemail, $subject, $message);
            $this->session->set_flashdata('msg', 'New password has been sent on your email address!');

				//$this->load->library('email');
					
				//	$config['protocol'] = 'sendmail';
				//	$config['mailpath'] = '/usr/sbin/sendmail';
				//	$config['charset'] = 'iso-8859-1';
				//	$config['mailtype'] = 'html';
				//	$config['wordwrap'] = TRUE;
					
				//	$this->email->initialize($config);

				//	$this->email->from($master_email, $master_name);
				//	$this->email->to($email); 
					
				//	$this->email->subject('Password Reset for Skills Internation');
					
				//	$this->email->message($message);	
				//	$this->email->send();
					redirect('auth/login/reset');
                

                

            }
            
        }
    }
    

    
    
}

?>