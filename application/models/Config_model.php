<?php
class Config_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_addresses($config_id = FALSE)
    {
        $this->db->select('*');
					$this->db->from('addresses');
					
					$query = $this->db->get();
					return $query->result_array();
    }
//    public function set_settings($image = false)
//    {
//       
//        $this->load->helper('url');
//        $data = array();
//
//        if($this->input->post('email')){
//            $data['email'] = $this->input->post('email');
//        }
//        
//        if($this->input->post('phone')){
//            $data['phone'] = $this->input->post('phone');
//        }
//        if($this->input->post('address')){
//            $data['address'] = $this->input->post('address');
//        }
//        if($this->input->post('facebook')){
//            $data['facebook'] = $this->input->post('facebook');
//        }
//        if($this->input->post('twitter')){
//            $data['twitter'] = $this->input->post('twitter');
//        }
//        if($this->input->post('google_plus')){
//            $data['google_plus'] = $this->input->post('google_plus');
//        }
//        if($this->input->post('instagram')){
//            $data['instagram'] = $this->input->post('instagram');
//        }
//        if($this->input->post('linkedin')){
//            $data['linkedin'] = $this->input->post('linkedin');
//        } 
//       
//		
//		
//		return $this->db->insert('site_settings', $data);
//    }
    public function update_addresses(){
        $data = array();
        if($this->input->post('a_email')){
            $data['a_email'] = $this->input->post('a_email');
        }
        if($this->input->post('facebook')){
            $data['facebook'] = $this->input->post('facebook');
        }if($this->input->post('twitter')){
            $data['twitter'] = $this->input->post('twitter');
        }if($this->input->post('google_plus')){
            $data['google_plus'] = $this->input->post('google_plus');
        }if($this->input->post('instagram')){
            $data['instagram'] = $this->input->post('instagram');
        }if($this->input->post('linkedin')){
            $data['linkedin'] = $this->input->post('linkedin');
        }

        if($this->input->post('pak_title1')){
            $data['pak_title1'] = $this->input->post('pak_title1');
        }
        if($this->input->post('pak_loc1')){
            $data['pak_loc1'] = $this->input->post('pak_loc1');
        }
        if($this->input->post('pak_phone1')){
            $data['pak_phone1'] = $this->input->post('pak_phone1');
        }
        if($this->input->post('pak_msg1')){
            $data['pak_msg1'] = $this->input->post('pak_msg1');
        }
        if($this->input->post('pak_fax1')){
            $data['pak_fax1'] = $this->input->post('pak_fax1');
        }
        if($this->input->post('pak_website1')){
            $data['pak_website1'] = $this->input->post('pak_website1');
        }
        
        if($this->input->post('pak_title2')){
            $data['pak_title2'] = $this->input->post('pak_title2');
        }
        if($this->input->post('pak_loc2')){
            $data['pak_loc2'] = $this->input->post('pak_loc2');
        }
        if($this->input->post('pak_phone2')){
            $data['pak_phone2'] = $this->input->post('pak_phone2');
        }
        if($this->input->post('pak_msg2')){
            $data['pak_msg2'] = $this->input->post('pak_msg2');
        }
        if($this->input->post('pak_fax2')){
            $data['pak_fax2'] = $this->input->post('pak_fax2');
        }
        if($this->input->post('pak_website2')){
            $data['pak_website2'] = $this->input->post('pak_website2');
        }
        
        
        if($this->input->post('siri_title1')){
            $data['siri_title1'] = $this->input->post('siri_title1');
        }
        if($this->input->post('siri_loc1')){
            $data['siri_loc1'] = $this->input->post('siri_loc1');
        }
        if($this->input->post('siri_phone1')){
            $data['siri_phone1'] = $this->input->post('siri_phone1');
        }
        if($this->input->post('siri_msg1')){
            $data['siri_msg1'] = $this->input->post('siri_msg1');
        }
        if($this->input->post('siri_fax1')){
            $data['siri_fax1'] = $this->input->post('siri_fax1');
        }
        
        if($this->input->post('siri_title2')){
            $data['siri_title2'] = $this->input->post('siri_title2');
        }
        if($this->input->post('siri_loc2')){
            $data['siri_loc2'] = $this->input->post('siri_loc2');
        }
        if($this->input->post('siri_phone2')){
            $data['siri_phone2'] = $this->input->post('siri_phone2');
        }
        if($this->input->post('siri_msg2')){
            $data['siri_msg2'] = $this->input->post('siri_msg2');
        }
        if($this->input->post('siri_fax2')){
            $data['siri_fax2'] = $this->input->post('siri_fax2');
        }
        
        if($this->input->post('siri_title3')){
            $data['siri_title3'] = $this->input->post('siri_title3');
        }
        if($this->input->post('siri_loc3')){
            $data['siri_loc3'] = $this->input->post('siri_loc3');
        }
        if($this->input->post('siri_phone3')){
            $data['siri_phone3'] = $this->input->post('siri_phone3');
        }
        if($this->input->post('siri_msg3')){
            $data['siri_msg3'] = $this->input->post('siri_msg3');
        }
        if($this->input->post('siri_fax3')){
            $data['siri_fax3'] = $this->input->post('siri_fax3');
        }
      
        if($this->input->post('siri_title4')){
            $data['siri_title4'] = $this->input->post('siri_title4');
        }
        if($this->input->post('siri_loc4')){
            $data['siri_loc4'] = $this->input->post('siri_loc4');
        }
        if($this->input->post('siri_phone4')){
            $data['siri_phone4'] = $this->input->post('siri_phone4');
        }
        if($this->input->post('siri_msg4')){
            $data['siri_msg4'] = $this->input->post('siri_msg4');
        }
        if($this->input->post('siri_fax4')){
            $data['siri_fax4'] = $this->input->post('siri_fax4');
        }
        
        if($this->input->post('siri_title5')){
            $data['siri_title5'] = $this->input->post('siri_title5');
        }
        if($this->input->post('siri_loc5')){
            $data['siri_loc5'] = $this->input->post('siri_loc5');
        }
        if($this->input->post('siri_phone5')){
            $data['siri_phone5'] = $this->input->post('siri_phone5');
        }
        if($this->input->post('siri_msg5')){
            $data['siri_msg5'] = $this->input->post('siri_msg5');
        }
        if($this->input->post('siri_fax5')){
            $data['siri_fax5'] = $this->input->post('siri_fax5');
        }
        
        if($this->input->post('siri_title6')){
            $data['siri_title6'] = $this->input->post('siri_title6');
        }
        if($this->input->post('siri_loc6')){
            $data['siri_loc6'] = $this->input->post('siri_loc6');
        }
        if($this->input->post('siri_phone6')){
            $data['siri_phone6'] = $this->input->post('siri_phone6');
        }
        if($this->input->post('siri_msg6')){
            $data['siri_msg6'] = $this->input->post('siri_msg6');
        }
        if($this->input->post('siri_fax6')){
            $data['siri_fax6'] = $this->input->post('siri_fax6');
        }
		
		return $this->db->update('addresses', $data);
    }
   
	 
}