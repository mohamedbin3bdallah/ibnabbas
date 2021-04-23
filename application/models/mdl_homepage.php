<?php

        class mdl_homepage extends CI_Model {
            
            public function create_slider($data) {
                
                $config = array( 
                    'allowed_types' => 'jpg|gif|png|tiff',
                    'upload_path' => './upload'
                );
                $this->load->library('upload', $config);
                    if( $this->upload->do_upload()) {
                        $up =  $this->upload->data();
                    $data_in = array (
                        'slider_desc' => $data['desc'],
                        'slider_url' =>  $up['file_name'],
                        'slider_desc_ar' => $data['desc_ar']
                    );
                    $this->db->insert('slider',$data_in);
                    return $this->db->insert_id();
                }
            }
            
            
            public function get_slider_data($id=NULL) {
                if($id){
                    $this->db->where('slider_id',$id);
                    $query = $this->db->get('slider');
                }
                elseif(!$id){
                $query = $this->db->get('slider');
                }
                if($query->num_rows() > 0 ){
                    return $query->result();
                }
            }
            
            public function get_slider() {
                $query = $this->db->get('slider');
                if($query->num_rows() > 0 ){
                    return $query->result();
                }
            }
            
            
            public function update_slider($data) { 
                $config = array( 
                    'allowed_types' => 'jpg|gif|png|tiff',
                    'upload_path' => './upload'
                );
                $this->load->library('upload', $config);
                if( $this->upload->do_upload()) {
                    $data_up = array('upload_data' => $this->upload->data());
                    $data_in = array (
                        'slider_url' =>  $data_up['upload_data']['file_name'],
                        'slider_desc' => $data['desc'],
                        'slider_desc_ar' => $data['desc_ar']
                    );
                }
                elseif(!$this->upload->do_upload()) {
                    $data_in = array (
                        'slider_url' =>  $data['staticphoto'],
                        'slider_desc' => $data['desc'],
                        'slider_desc_ar' => $data['desc_ar']
                    );
                }
                $this->db->update('slider',$data_in);
                 return $this->db->insert_id();
            }
            
            public function remove_item($id){
                $this->db->where('slider_id',$id);
                $this->db->delete('slider');
                return TRUE;
            }


            public function insert_quote($data) {
                $data_to = array(
                    'quote_title' => $data['title'],
                    'quote_title_ar' => $data['title_ar'],
                    'quote_url' => $data['url']
                );
                $this->db->insert('quotes',$data_to);
                return $this->db->insert_id();
            }
            
            public function update_quote($data) {
                $data_to = array(
                    'quote_title' => $data['title'],
                    'quote_title_ar' => $data['title_ar'],
                    'quote_url' => $data['url']
                );
                $id = $data['id'];
                $this->db->where('quote_id',$id);
                $this->db->update('quotes',$data_to);
                return $this->db->insert_id();
            }
            
            public function remove_quote($id){
                $this->db->where('quote_id',$id);
                $this->db->delete('quotes');
                return TRUE;
            }


            public function get_quote(){
                $query = $this->db->get('quotes');
                if($query->num_rows() > 0){
                    return $query->result();
                }
            }
            
            public function get_quote_custom($id){
                $this->db->where('quote_id',$id);
                $query = $this->db->get('quotes');
                if($query->num_rows() > 0){
                    return $query->result();
                }
            }
            
            
            
            
            
            
            
        }