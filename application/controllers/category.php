<?php

    class category extends CI_Controller {
        
        public function add_cat(){
            $data['content'] = 'admin/add_cat';
            $this->load->view('admin/template/content',$data);
        }
        
        public function create_cat() {
                $data = array(
                    'name' =>  $this->input->post('name'),
                    'desc' =>  $this->input->post('desc')
                );
                $this->load->model('mdl_category');               
                $id = $this->mdl_category->insert_cat($data);
                $data['rows'] = $this->mdl_category->get_cat($id);
                $data['content'] = 'admin/add_cat';
                $this->load->view('admin/template/content',$data);
        }
        
        public function edit_cat() {
                 if(!$_POST){
                    $id = $this->uri->segment(3);
                    $this->load->model('mdl_category');
                    $data['rows'] = $this->mdl_category->get_cat($id);
                    $data['content'] = 'admin/add_cat';
                    $this->load->view('admin/template/content',$data);  
                }
                else {
                    $data = array(
                    'id' => $this->uri->segment(3),
                    'name' =>  $this->input->post('name'),
                    'desc' =>  $this->input->post('desc')
                    );
                    $this->load->model('mdl_category');
                    $id = $this->uri->segment(3);
                    $this->mdl_category->update_cat($data);
                    $data['rows'] = $this->mdl_category->get_cat($id);
                    $data['content'] = 'admin/add_cat';
                    $this->load->view('admin/template/content',$data);
                }
        }
        
        public function delete_cat() {
                    $this->load->model('mdl_category');
                    $this->mdl_category->remove_cat($this->uri->segment(3));
                    $this->list_cat();
           }
        
        public function list_cat() {
                    $this->load->model('mdl_category');
                    $data['rows'] = $this->mdl_category->get_cat_data();
                    $data['content'] = 'admin/list_cat';
                    $this->load->view('admin/template/content',$data);
        }

        
    }