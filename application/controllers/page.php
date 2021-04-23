<?php

    class page extends CI_Controller {
        
        public function add_page(){
            $data['content'] = 'admin/add_page';
            $this->load->view('admin/template/content',$data);
        }
        
        public function create_page() {
                $data = array(
                    'title' => $this->input->post('title'),
                    'name' =>  $this->input->post('name'),
                    'desc' =>  $this->input->post('desc')
                );
                $this->load->model('mdl_page');                $id = $this->mdl_page->insert_page($data);
                $data['rows'] = $this->mdl_page->get_page($id);
                $data['content'] = 'admin/add_page';
                $this->load->view('admin/template/content',$data);
        }
        
        public function edit_page() {
                if(!$_POST){
                    $id = $this->uri->segment(3);
                    $this->load->model('mdl_page');
                    $data['rows'] = $this->mdl_page->get_page($id);
                    $data['content'] = 'admin/add_page';
                    $this->load->view('admin/template/content',$data);  
                }
                else {
                    $data = array(
                    'id' => $this->uri->segment(3),
                    'title' => $this->input->post('title'),
                    'name' =>  $this->input->post('name'),
                    'desc' =>  $this->input->post('desc')
                    );
                    $this->load->model('mdl_page');
                    $id = $this->uri->segment(3);
                    $this->mdl_page->update_page($data);
                    $data['rows'] = $this->mdl_page->get_page($id);
                    $data['content'] = 'admin/add_page';
                    $this->load->view('admin/template/content',$data);
                }
        }
        
        public function delete_page() {
                $this->load->model('mdl_page');
                $this->mdl_page->remove_page($this->uri->segment(3));
                $this->list_page();
           }
        
        public function list_page() {
                    $this->load->model('mdl_page');
                    $data['rows'] = $this->mdl_page->get_page_data();
                    $data['content'] = 'admin/list_page';
                    $this->load->view('admin/template/content',$data);
        }

        
    }