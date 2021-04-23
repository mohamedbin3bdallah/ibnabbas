<?php

    class homepage extends CI_Controller {
        
        
        
        
        function index() {
            $this->load->model('mdl_homepage');
            $data['rows'] = $this->mdl_homepage->get_slider_data();
            $data['content'] = 'admin/home_page';
            $this->load->view('admin/template/content',$data);
        }
        
        
        public function create_home_slider() {
            $data = array(
                'itemphoto' => $this->input->post('userfile'),
                'desc' => $this->input->post('description'),
                'desc_ar' => $this->input->post('description_ar')
            );
            $this->load->model('mdl_homepage');
            $id = $this->mdl_homepage->create_slider($data);
            $data['rows'] = $this->mdl_homepage->get_slider_data($id);
            $data['content'] = 'admin/home_page';
            $this->load->view('admin/template/content',$data);
        }
        
        public function update_home_slider() {
            $this->load->model('mdl_homepage');
            $data = array(
                'photo' => $this->input->post('userfile'),
                'desc' => $this->input->post('description'),
                'desc_ar' => $this->input->post('description_ar'),
                'staticphoto' => $this->input->post('photo_value')
            );
            $id = $this->uri->segment(3);
            $this->mdl_homepage->update_slider($data);
            $data['rows'] = $this->mdl_homepage->get_slider_data($id);
            $data['content'] = 'admin/home_page';
            $this->load->view('admin/template/content',$data);
        }
        
        public function delete_slider_item(){
            
            $this->load->model('mdl_homepage');
            $this->mdl_homepage->remove_item($this->uri->segment(3));
            $this->index();
        }

        



        // functions of quotes for messages video 
        
        public function list_quotes(){
            $this->load->model('mdl_homepage');
            $data['rows'] = $this->mdl_homepage->get_quote();
            $data['content'] = 'admin/list_quotes';
            $this->load->view('admin/template/content',$data);
        }

        public function show_quotes(){
            
            $data['content'] = 'admin/show_quotes';
            $this->load->view('admin/template/content',$data);
        }
        
        public function create_quote(){
            $data_in = array(
                'title' => $this->input->post('quote_title'),
                'url' => $this->input->post('quote_url'),
                'title_ar' => $this->input->post('quote_title_ar')
            );
            $this->load->model('mdl_homepage');
            $id = $this->mdl_homepage->insert_quote($data_in);
            $data['rows'] = $this->mdl_homepage->get_quote_custom($id);
            $data['content'] = 'admin/show_quotes';
            $this->load->view('admin/template/content',$data);
            
            
        }
        
        public function edit_quote(){
            
            if(!$_POST){
            $id = $this->uri->segment(3);    
            $this->load->model('mdl_homepage');
            $data['rows'] = $this->mdl_homepage->get_quote_custom($id);
            $data['content'] = 'admin/show_quotes';
            $this->load->view('admin/template/content',$data); 
            }
            else {
                $data_in = array(
                'id' => $this->uri->segment(3),
                'title' => $this->input->post('quote_title'),
                'url' => $this->input->post('quote_url'),
                'title_ar' => $this->input->post('quote_title_ar')
            );
            $id = $this->uri->segment(3);  
            $this->load->model('mdl_homepage');
            $this->mdl_homepage->update_quote($data_in);
            $data['rows'] = $this->mdl_homepage->get_quote_custom($id);
            $data['content'] = 'admin/show_quotes';
            $this->load->view('admin/template/content',$data);

            }
            
            
        }
        
        
        public function delete_quote() {
            $this->load->model('mdl_homepage');
            $this->mdl_homepage->remove_quote($this->uri->segment(3));
            $this->list_quotes();
        }
        
        
        
    }