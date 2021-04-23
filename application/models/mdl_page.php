<?php

    class mdl_page extends CI_Model {
        
        public function insert_page($data) {
            
            $data = array(
                'page_title' => $data['title'],
                'page_name' => $data['name'],
                'page_desc' => $data['desc']
            );
            $this->db->insert('pages',$data);
                return $this->db->insert_id();
        } // end of function insert  
        
        
        public function get_page($id) {
            $this->db->where('page_id',$id);
            $query = $this->db->get('pages');
            if($query->num_rows() > 0 ){
                return $query->result();
            }
        }
        
        public function get_page_data() {
            $query = $this->db->get('pages');
            if ( $query->num_rows() > 0 ) {
                return $query->result();
            }
        }

        public function remove_page($id) {
            $this->db->where('page_id',$id);
            $this->db->delete('pages');
            return TRUE;
        }

        public function update_page($data){
            $data_up = array(
                'page_title' => $data['title'],
                'page_name' => $data['name'],
                'page_desc' => $data['desc']
            );
            $this->db->where('page_id',$data['id']);
            $this->db->update('pages',$data_up);
            return $this->db->insert_id();
        }
   
        

    } // end of clas  mdl _page 