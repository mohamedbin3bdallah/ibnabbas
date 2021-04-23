<?php

    class mdl_gallery extends CI_Model {
        
        public function create_photo($data){
            
            $config = array(
                    'upload_path' => './upload/gallery',
                    'allowed_types'  => 'gif|jpg|png|jpeg|bmp',
                    'overwrite' => TRUE
                );
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data_up = array('upload_data' => $this->upload->data());
            
            $data_in = array(
                'photo_url' => $data_up['upload_data']['file_name']
            );
            $this->db->insert('gallery',$data_in);
            $this->db->insert_id();
        }
        
        public function get_photo(){
        
            $query = $this->db->get('gallery');
            if($query->num_rows()){
                return $query->result();
            }
        }

        
        
        public function get_video(){
        
            $query = $this->db->get('video');
            if($query->num_rows()){
                return $query->result();
            }
        }
		
		public function get_audio(){
        
            $query = $this->db->get('audio');
            if($query->num_rows()){
                return $query->result();
            }
        }
        
        
        public function delete_photo($id){
            $this->db->where('photo_id',$id);
            $this->db->delete('gallery');
            return $this->db->insert_id();
        }
        
        public function create_video($data){
            
            $data_in = array(
                'video_url' => $data['videoname']
            );
            $this->db->insert('video',$data_in);
            $this->db->insert_id();
            
        }
		
		public function create_audio($data){
            
            $data_in = array(
                'audio_url' => $data['audioname']
            );
            $this->db->insert('audio',$data_in);
            $this->db->insert_id();
            
        }
        
        public function remove_video($id){
            $this->db->where('video_id',$id);
            $this->db->delete('video');
            return $this->db->insert_id();
        }
		
		public function remove_audio($id){
            $this->db->where('id',$id);
            $this->db->delete('audio');
            return $this->db->insert_id();
        }
        
    }