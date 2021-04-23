<?php

    class mdl_post extends CI_Model {
        
        public function insert_post($data) {
            $data = array(
                'post_title' => $data['title_en'],
                'post_desc' => $data['desc_en'],
                'post_order' => $data['order'],
                'post_target' => $data['target'],
                'post_cat' => $data['cat'],
                'post_title_ar' => $data['title_ar'],
                'post_desc_ar' => $data['desc_ar'],
                'post_photo' => $data['photo']
            );
            $this->db->insert('posts',$data);
                return $this->db->insert_id();
        } // end of function insert  
        
        
        public function get_post($id) {
            $this->db->where('post_id',$id);
            $this->db->select('*');
            $this->db->from('posts');
            $this->db->join('pages','posts.post_target = pages.page_id');
            $query = $this->db->get();
            if($query->num_rows() > 0 ){
                return $query->result();
            }
        }

        
        public function update_post($data){
            $data_up = array(
                'post_title' => $data['title_en'],
                'post_desc' => $data['desc_en'],
                'post_order' => $data['order'],
                'post_target' => $data['target'],
                'post_cat' => $data['cat'],
                'post_title_ar' => $data['title_ar'],
                'post_desc_ar' => $data['desc_ar'],
                'post_photo' => $data['photo']
            );
            $this->db->where('post_id',$data['id']);
            $this->db->update('posts',$data_up);
            return $this->db->insert_id();
        }
        
        public function get_all_post($num=NULL,$offset=NULL) {
            if($num && !$offset){
                $query = $this->db->get('posts',$num);
            }
            elseif($num && $offset){
                $query = $this->db->get('posts',$num,$offset);
            }
            else {
                $query = $this->db->get('posts');
            }
            if($query->num_rows() > 0 ) {
                return $query->result();
            }
        }
        
        public function count_post() {
                $query = $this->db->get('posts');
                return $query->num_rows();
        }

        public function remove_post($id) {
            $this->db->where('post_id',$id);
            $this->db->delete('posts');
            return TRUE;
        }
   
        

    } // end of clas  mdl _post 