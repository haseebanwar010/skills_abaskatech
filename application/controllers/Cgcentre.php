<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cgcentre extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('cgcentre_model');
    $this->load->helper('captcha');
} 

    public function index(){
        
    }
    public function register(){
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('centre_name', 'Centre Name', 'required|min_length[3]');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('person_name', 'Focal Person Name', 'required');
        $this->form_validation->set_rules('phone', 'Telephone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('number_years', 'Number of years established', 'required');
        
        $this->form_validation->set_rules('organization_type', 'Organization Type', 'required');
        $this->form_validation->set_rules('qualification', 'Qualification', 'required');
        
//      $carr=implode(",",$this->input->post('contact'));
//     $this->form_validation->set_rules($carr, 'I prefer to be contacted through', 'required');
    

        
        $sitesettings=getsitedata();     
        $adminemail=$sitesettings->a_email;

        $subject="C&G Centre Registration";
        
        if ($this->form_validation->run() === FALSE){
            $characters = 'QAZWSXEDCRFVTGBYHNUJMIKOLP?!@#$%*123456789';
			$random_number = "";
            $max = strlen($characters) - 1;

            for ($i = 0; $i < 7; $i++) {
                $random_number .= $characters[mt_rand(0, $max)];
            }
				$vals = array(
                    'word_length'   => 4,
                    'font_size'     => 26,
                'word' => $random_number,
                'img_path' => './assets/captcha/',
                'img_url' => base_url() . 'assets/captcha/',
                'img_width' => 140,
                'img_height' => 32,
                'expiration' => 7200,    
                'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(243, 243, 249)
        )
            );
            $data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);
            
            
        $this->load->view('template/header',$data);
        $this->load->view('cgcentre',$data);
        $this->load->view('template/footer',$data);
        }
        else if($_SESSION['captchaWord']!=$this->input->post('userCaptcha')){
             $characters = 'QAZWSXEDCRFVTGBYHNUJMIKOLP?!@#$%*123456789';
			$random_number = "";
            $max = strlen($characters) - 1;

            for ($i = 0; $i < 7; $i++) {
                $random_number .= $characters[mt_rand(0, $max)];
            }
				$vals = array(
                    'word_length'   => 4,
                    'font_size'     => 26,
                'word' => $random_number,
                'img_path' => './assets/captcha/',
                'img_url' => base_url() . 'assets/captcha/',
                'img_width' => 140,
                'img_height' => 32,
                'expiration' => 7200,    
                'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(243, 243, 249)
        )
            );
            $data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);
            $this->session->set_flashdata('validation_errors_captcha', 'Invalid Captcha');
            $this->load->view('template/header',$data);
        $this->load->view('cgcentre',$data);
        $this->load->view('template/footer',$data);
        }
        else{
           

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
													<h2 style='font-family: verdana;'>C&G Centre Registration</h2>
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
                                    <p style='text-align: left; font-family: verdana;'>Centre Name : ".$this->input->post('centre_name')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Location : ".$this->input->post('location')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Focal Person Name : ".$this->input->post('person_name')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Telephone : ".$this->input->post('phone')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Email Address : ".$this->input->post('email')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Number of years established : ".$this->input->post('number_years')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Organization Type : ".$this->input->post('organization_type')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Qualifications : ".$this->input->post('qualification')."</p>
                                                    
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
            //jobs@skills.lk
            send_email_custom('jobs@skills.lk', $this->input->post('email'), $subject, $message,$pathattachment);
            $this->session->set_flashdata('msg', 'Your email has been sent to the admin successfully!');
            redirect('cgcentre/register');
        }
        
    }
    }

?>