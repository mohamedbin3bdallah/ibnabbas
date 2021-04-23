<?php

    class mdl_marketing extends CI_Model {
        
        
        
        public function insert_social($social){
            
            $data = array(
                'facebook' => $social['facebook'],
                'twitter' => $social['twitter'],
                'youtube' => $social['youtube'],
                'instagram' => $social['instagram'],
                'google' =>  $social['google'],
                'linkedin' => $social['linkedin'],
                'soundcloud' => $social['soundcloud']
            );
            $this->db->where('social_id',1);
            $this->db->update('social',$data);
            return TRUE;
        }
        
        public function get_social() {
            $query = $this->db->get('social');
            if($query->num_rows() > 0) {
                return $query->result();
            }
        }
        
        
        
        
        
        
        
    } // end of ci_ model