<?php
    class mdl_contact extends CI_Model {        
        public function save_message($data){            
            $data_in = array(
                'msg_name' => $data['name'],
                'msg_mail' => $data['mail'],
                'msg_details' => $data['msg']
            );
            $this->db->insert('query',$data_in);
            return $this->db->insert_id;
        }        
    }