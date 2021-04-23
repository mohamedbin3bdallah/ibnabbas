<?php

    class mdl_msg extends CI_Model {
        
        
        public function get_msg_setting() {
            $query = $this->db->get('message');
            if($query->num_rows > 0 ){
                return $query->result();
            }
        }
        
        public function update_msg_setting($data) {
            $data_in = array(
                'mail_from' => $data['from'],
                'mail_pass' => $data['pass'],
                'mail_subj' => $data['subj'],
                'mail_msg' => $data['msg']
            );
            $this->db->where('msg_id',1);
            $this->db->update('message',$data_in);
            return $this->db->insert_id();
        }
        
        public function count_mail(){
            $query = $this->db->get('sender');
            return $query->num_rows();
        }

        public function get_all_sender($id=NULL) {
            if($id){
                $this->db->where('sender_id',$id);
                $query = $this->db->get('sender');  
            }
            else {
                $query = $this->db->get('sender');
            }
            if($query->num_rows > 0 ){
                return $query->result();
            } 
        }
        
        public function remove_msg($id) {
            $this->db->where('sender_id',$id);
            $this->db->delete('sender');
            return TRUE;
        }
        
        public function add_sender($mail) {
            $data = array('sender_mail' => $mail);
            $this->db->insert('sender',$data);
            return $this->db->insert_id();
        }
        
        
        
        
        
        
        
        
        
        
        
    }