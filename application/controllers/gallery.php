<?php

    class gallery extends CI_Controller {
       
        
        
        public function index() {
            $this->load->model('mdl_gallery');
            $data['photos'] = $this->mdl_gallery->get_photo();
            $data['videos'] = $this->mdl_gallery->get_video();
			$data['audios'] = $this->mdl_gallery->get_audio();
            $data['content'] = 'admin/show_gallery';
            $this->load->view('admin/template/content',$data);
        }
        
        public function add_photo() {
                $data = array(
                    'filename' => $this->input->post('userfile')
                );
                $this->load->model('mdl_gallery');
                $this->mdl_gallery->create_photo($data);
                redirect('gallery','refresh');
        }
        
        public function delete_file(){
            $id = $this->uri->segment(3);
            $this->load->model('mdl_gallery');
            $this->mdl_gallery->delete_photo($id);
            redirect('gallery','refresh');
        }
        
        public function add_video() {
                $data = array(
                    'videoname' => $this->input->post('video_url')
                );
                $this->load->model('mdl_gallery');
                $this->mdl_gallery->create_video($data);
                redirect('gallery','refresh');
        }
		       
        public function delete_video(){
            $id = $this->uri->segment(3);
            $this->load->model('mdl_gallery');
            $this->mdl_gallery->remove_video($id);
            redirect('gallery','refresh');
        }
		
		public function add_audio() {
                $data = array(
                    'audioname' => $this->input->post('audio_url')
                );
                $this->load->model('mdl_gallery');
                $this->mdl_gallery->create_audio($data);
                redirect('gallery','refresh');
        }
		       
        public function delete_audio(){
            $id = $this->uri->segment(3);
            $this->load->model('mdl_gallery');
            $this->mdl_gallery->remove_audio($id);
            redirect('gallery','refresh');
        }
		
		

        public function pagination() {
            $this->load->library('pagination');
            $path = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2);
            $config['base_url'] = $path;
            $config['total_rows'] = count(directory_map('./upload/', 0));
            $config['per_page'] = 10;
            $this->pagination->initialize($config); 
        }


    } // end of controller 