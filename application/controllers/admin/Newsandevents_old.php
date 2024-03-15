<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsandevents extends CI_Controller {
   
	protected $title = '';

	public function __construct()
        {
                parent::__construct();
				$this->load->library('session');
				$this->load->model('newsandevents_model');
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'allnews';
		$data['allnews'] = $this->newsandevents_model->get_newsandevents();
        
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
                $this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/newsandevents/index', $data);
				$this->load->view('admin/templates/footer', $data);
        }
				
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
			$data['page'] = 'addnews';
			//$data['config'] = $this->config_model->get_config(1);
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
        
			if($this->form_validation->run()==FALSE)
			{
                $data['msg'] = 'All Fields are required.';
//				if($url == NULL){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/newsandevents/add', $data);
				$this->load->view('admin/templates/footer',$data);
//				}else{
//						echo validation_errors();
//				}
					
			}
			else
			{
                
                $new_name = time().$_FILES['image']['name'];
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
                $this->upload->initialize($config);
				
				if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    $this->createThumbnail($picture);
                    $udate=$this->input->post('date');
                    $uudate=date('Y-m-d',strtotime($udate));
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'date' => $uudate,
                    'image' => $picture,
                    'description' => $this->input->post('description')
                    );
          
                    $this->newsandevents_model->addnews($userData);
                    $this->session->set_flashdata('msg', 'News & event added successfully!');
                    redirect('admin/newsandevents');

                }else{
                    $this->session->set_flashdata('error_msg',$this->upload->display_errors());
                    redirect('admin/newsandevents');
                    
                }
                

				
				
			}
        
			
		}
    public function edit($id = NULL){
        $picture="";
			$user = $this->session->get_userdata();
			$data['page'] = 'editnews';
            $data['editnews'] = $this->newsandevents_model->get_newsandevents($id);
			
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
        
        
			if($this->form_validation->run()==FALSE)
			{
                $data['msg'] = 'All Fields are required.';                
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/newsandevents/edit', $data);
				$this->load->view('admin/templates/footer',$data);
			}
			else
			{
				if($_FILES['image']['tmp_name']!='')
				{
                    
                $new_name = time().$_FILES['image']['name'];
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
                $this->upload->initialize($config);
				
				if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    $this->createThumbnail($picture);
                    }
                else{
						$this->session->set_flashdata('error_msg',$this->upload->display_errors());
						redirect('admin/newsandevents');
                    }
                if($picture != ""){
                    $udate=$this->input->post('date');
                    $uudate=date('Y-m-d',strtotime($udate));
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'date' => $uudate,
                    'image' => $picture,
                    'description' => $this->input->post('description')
                    );
                    $this->newsandevents_model->update_newsandevents($userData);
				$this->session->set_flashdata('msg', 'News & Event is updated Successfully!');
                }
				else{
                    $udate=$this->input->post('date');
                    $uudate=date('Y-m-d',strtotime($udate));
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'date' => $uudate,
                    'image' => $picture
                    );
					$this->newsandevents_model->update_newsandevents($userData);
					$this->session->set_flashdata('msg', 'News & Event is updated Successfully!');
				}
                    
                redirect('admin/newsandevents');    
            }
                else{
                    
                    $udate=$this->input->post('date');
                    $uudate=date('Y-m-d',strtotime($udate));
                    $userData = array(
                    'title' => $this->input->post('title'),
                    'date' => $uudate
                    );
					$this->newsandevents_model->update_newsandevents($userData);
					$this->session->set_flashdata('msg', 'News & Event is updated Successfully!');
                    
                }
                
redirect('admin/newsandevents'); 
				
				
			}
			
        
			
			
		}
    //@unlink("./assets/uploads/news/images/$file_name");
    public function delete($id = NULL){
        $news=$this->newsandevents_model->getnewsname($id);
        $newsname=$news[0]['image'];
        
			if($this->newsandevents_model->delete_newsandevents($id)){
                @unlink("./uploads/$newsname");
                @unlink("./uploads/thumb/$newsname");
				$this->session->set_flashdata('msg', 'News deleted Successfully!');
				redirect('admin/newsandevents');
			}
			
		}
    public function createThumbnail($filename)
 		{
 
        	$config['image_library']    = "gd2";      
 			$config['source_image']     = "./uploads/" .$filename;
			$config['new_image']     = "./uploads/thumb/";      
 			$config['create_thumb']     = TRUE;      
 			$config['maintain_ratio']   = TRUE;      
 			$config['width'] = "140";      
 			$config['height'] = "100";
 			$this->load->library('image_lib',$config);
 			if(!$this->image_lib->resize())
 			{
 				echo $this->image_lib->display_errors();
 			}      
 		}
    
    
    
}
?>