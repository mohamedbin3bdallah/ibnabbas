<?php

    class mdl_category extends CI_Model {
        
        public function insert_cat($data) {
            $data_in = array(
                'cat_name' => $data['name'],
                'cat_desc' => $data['desc']
            );
            $this->db->insert('category',$data_in);
                return $this->db->insert_id();
        } // end of function insert  
        
        
        public function get_cat($id) {
            $this->db->where('cat_id',$id);
            $query = $this->db->get('category');
            if($query->num_rows() > 0 ){
                return $query->result();
            }
        }
        
        public function get_cat_data() {
            $query = $this->db->get('category');
            if ( $query->num_rows() > 0 ) {
                return $query->result();
            }
        }

        public function remove_cat($id) {
            $this->db->where('cat_id',$id);
            $this->db->delete('category');
            return TRUE;
        }

        public function update_cat($data){
            $data_up = array(
                'cat_name' => $data['name'],
                'cat_desc' => $data['desc']
            );
            $this->db->where('cat_id',$data['id']);
            $this->db->update('category',$data_up);
            return $this->db->insert_id();
        }
   
        

    } // end of clas  mdl _page 