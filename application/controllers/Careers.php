<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller{

function __construct(){
parent:: __construct();
//    $this->load->model('Whatwedo_model');
}

    public function index(){
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//        
//        $result['page'] = 'contactus';
//        $this->load->view('template/header',$result);
//        $this->load->view('contactus',$result);
//        $this->load->view('template/footer',$result);
        
    }
    
 public function form(){
	 $result['page'] = 'career';
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[3]');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[3]');
        $this->form_validation->set_rules('phone', 'Contact Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
//      $carr=implode(",",$this->input->post('contact'));
//     $this->form_validation->set_rules($carr, 'I prefer to be contacted through', 'required');
    

        
        $sitesettings=getsitedata();     
        $adminemail=$sitesettings->a_email;

        $subject="Careers";
        
        if ($this->form_validation->run() === FALSE){

        $this->load->view('template/header',$data);
        $this->load->view('careers',$data);
        $this->load->view('template/footer',$data);
        }
        else{
            $new_name = time().$_FILES["resume"]['name'];
				$config['file_name'] = $new_name;
				$config['upload_path']   =   "./uploads/";
 				$config['allowed_types'] =   "gif|jpg|jpeg|png|pdf|docx|doc"; 
		 		$this->load->library('upload',$config);
                
		 		if(!$this->upload->do_upload('resume'))
		 		{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('careers/form');
		 		}
		 		else
		 		{
                    $baseurl=$this->config->base_url();
		 			$finfo=$this->upload->data();
                   $pathattachment=$finfo['full_path'];
		 		}

                $message="<table cellpadding='0' width='100%' cellspacing='0' border='0' id='backgroundTable' class='bgBody'>
		<tr>
			<td>
				<table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
					<tr>
						<td class='movableContentContainer'>
							
							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr height='40'>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
									</tr>
									<tr>
										<td width='200' valign='top'>&nbsp;</td>
										<td width='200' valign='top' align='center'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >";
													$message.="<img src='";
                                                        $message.=$baseurl."assets/images/logo.png";
                                                        $message.="' width='250' alt='Logo'  data-default='placeholder' />";
												$message.="</div>
											</div>
										</td>
										<td width='200' valign='top'>&nbsp;</td>
									</tr>
									<tr height='25'>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr>
										<td width='100%' colspan='3' align='center' style='padding-bottom:10px;padding-top:25px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
													<h2 style='font-family: verdana;'>Careers</h2>
												</div>
											</div>
										</td>
									</tr>
                                    <tr>
										<td width='100'>&nbsp;</td>
										<td width='400' align='center' style='padding-bottom:5px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
                                                <span style='font-family: verdana;'>Dear, Admin</span>
													<p style='font-family: verdana;'>We have recieved a contact us email from user.</p>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>User detail</h4>
                                    <p style='text-align: left; font-family: verdana;'>First Name : ".$this->input->post('fname')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Last Name : ".$this->input->post('lname')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Contact Number : ".$this->input->post('phone')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Email Address : ".$this->input->post('email')."</p>
                                                    
												</div>
											</div>
										</td>
										<td width='100'>&nbsp;</td>
									</tr>
								</table>
							</div>
							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr>
										<td width='100%' colspan='2' style='padding-top:65px;'>
											<hr style='height:1px;border:none;color:#333;background-color:#ddd;' />
										</td>
									</tr>
									</table></div></td></tr></table></td></tr></table>";
//            send_email_custom($sitesetting['email'],$this->input->post('email'),"Careers",$message,$pathattachment);
            send_email_custom('jobs@skills.lk', $this->input->post('email'), $subject, $message,$pathattachment);
            $this->session->set_flashdata('msg', 'Your email has been sent to the admin successfully!');
            redirect('careers/form');
        }
        
    }
    
}
?>
    
