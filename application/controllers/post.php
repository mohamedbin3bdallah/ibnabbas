<?php

    class post extends CI_Controller {
        
        
        public function __construct() {
            parent::__construct();
            $this->load->model('mdl_post');
            $this->load->model('mdl_page');
            $this->load->model('mdl_category');
        }

        public function add_post(){
            $data['page'] = $this->mdl_page->get_page_data();
            $data['cat'] =  $this->mdl_category->get_cat_data();
            $data['content'] = 'admin/add_post';
            $this->load->view('admin/template/content',$data);
        }
        
        public function create_post() {
                $data = array(
                    'title_en' => $this->input->post('post_title_en'),
                    'desc_en' =>  $this->input->post('post_desc_en'),
                    'target' =>     $this->input->post('post_target'),
                    'cat' =>     $this->input->post('post_cat'),
                    'order' => $this->input->post('post_order'),
                    'title_ar' =>  $this->input->post('post_title_ar'),
                    'desc_ar' =>  $this->input->post('post_desc_ar'),
                    'photo' =>    $this->input->post('photo_up')
                );                
                $id = $this->mdl_post->insert_post($data);
                $data['page'] = $this->mdl_page->get_page_data();
                $data['cat'] =  $this->mdl_category->get_cat_data();
                $data['rows'] = $this->mdl_post->get_post($id);
                $data['content'] = 'admin/add_post';
                $this->load->view('admin/template/content',$data);
            }
        
        public function edit_post() {
            
                if(!$_POST){
                    $id = $this->uri->segment(3);
                    $data['page'] = $this->mdl_page->get_page_data();
                    $data['cat'] =  $this->mdl_category->get_cat_data();
                    $data['rows'] = $this->mdl_post->get_post($id);
                    $data['content'] = 'admin/add_post';
                    $this->load->view('admin/template/content',$data);
                }
                else {
                    $data = array(
                        'id' => $this->uri->segment(3),
                        'title_en' => $this->input->post('post_title_en'),
                        'desc_en' =>  $this->input->post('post_desc_en'),
                        'target' =>     $this->input->post('post_target'),
                        'cat' =>     $this->input->post('post_cat'),
                        'order' => $this->input->post('post_order'),
                        'title_ar' =>  $this->input->post('post_title_ar'),
                        'desc_ar' =>  $this->input->post('post_desc_ar'),
                        'photo' =>    $this->input->post('photo_up')
                    );
                    $this->mdl_post->update_post($data);
                    $id = $this->uri->segment(3); 
                    $data['page'] = $this->mdl_page->get_page_data();
                    $data['cat'] =  $this->mdl_category->get_cat_data();
                    $data['rows'] = $this->mdl_post->get_post($id);
                    $data['content'] = 'admin/add_post';
                    $this->load->view('admin/template/content',$data); 
                }
            }
           
           public function delete_post() {
                $this->mdl_post->remove_post($this->uri->segment(3));
                $this->list_post();
           }
           
            public function pagination() {
                 $this->load->library('pagination');
                 $path = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2);
                 $config['base_url'] = $path;
                 $config['total_rows'] = $this->mdl_post->count_post();
                 $config['per_page'] = 10;
                 $this->pagination->initialize($config); 
            }

           public function list_post () {
                $this->pagination();
                $data['rows'] = $this->mdl_post->get_all_post(10,$this->uri->segment(3));
                $data['pages'] = $this->mdl_page->get_page_data();
                $data['content'] = 'admin/list_post';
                $this->load->view('admin/template/content',$data);
           }

            public function show_post(){
            $data['content'] = 'admin/show_post';
            $this->load->view('admin/template/content',$data);
        }
        
    }