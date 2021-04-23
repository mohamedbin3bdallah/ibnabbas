<?php

    class marketing extends CI_Controller {
        
        public function social_media(){

                $this->load->model('mdl_marketing');
                $data['rows'] = $this->mdl_marketing->get_social();
                $data['content'] = 'admin/social_media';
                $this->load->view('admin/template/content',$data);
        }
        
        public function add_social_links(){
            
            if($_POST){
                $social = array(
                    'facebook' => $this->input->post('facebook'),
                    'twitter' => $this->input->post('twitter'),
                    'youtube' => $this->input->post('youtube'),
                    'instagram' => $this->input->post('instagram'),
                    'google' => $this->input->post('google'),
                    'soundcloud' => $this->input->post('Soundcloud'),
                    'linkedin' => $this->input->post('Linkedin')
                );

                $this->load->model('mdl_marketing');
                $this->mdl_marketing->insert_social($social);
                $data['rows'] = $this->mdl_marketing->get_social();
                if($this->mdl_marketing->get_social()){
                   $data['result'] = '<h4 class="text-success text-center"> your data updated successfully .</h4>'; 
                }
                $data['content'] = 'admin/social_media';
                $this->load->view('admin/template/content',$data);
            }
        }
        
    }