<?php

    class admin extends CI_Controller {
        
        public function index() {
            
            $this->load->view('admin/login');
        }
        
        public function validate_credential(){
            if($_POST){
                $data = array( 
                    'user' => $this->input->post('username'),
                    'pass' => $this->input->post('password')
                );
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username','username','required|trim');
                $this->form_validation->set_rules('password','password','required|trim');
                
                if($this->form_validation->run() == FALSE) {
                    $this->index();
                }
                else {
                    $this->load->model('mdl_admin');
                    if( $this->mdl_admin->check_login($data)) {
                       $this->session->set_userdata($data);
                       redirect('dashboard');
                    }
                    else {
                        $this->index();
                    }
                }
            } // end of $_post
        } // end of validation 
        
     public function add_admin() {
         $this->load->model('mdl_admin');
         $data['role'] = $this->mdl_admin->get_admin_role();
         $data['content'] = 'admin/add_admin';
         $this->load->view('admin/template/content',$data);
     }

     public function add_new_admin() {
            
            $data = array(
                'username' => $this->input->post('username'),
                'pass' => $this->input->post('password'),
                'mail' => $this->input->post('mail'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'photo' => $this->input->post('photo_up'),
                'role' => $this->input->post('admin_role'),
                'status' => $this->input->post('admin_status')
            );
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','username','required|trim');
            $this->form_validation->set_rules('password','password','required|trim');
            $this->form_validation->set_rules('confirm_password','password confirmation','required|matches[password]');
            $this->form_validation->set_rules('mail','mail','required|trim|valid_email');
            
            if($this->form_validation->run() == FALSE) {
                    $this->add_admin();
                }
            else {
                    if($this->uri->segment(3) == FALSE) {
                      $this->load->model('mdl_admin');
                      $id = $this->mdl_admin->create_admin($data);
                      $data['rows'] = $this->mdl_admin->get_certain_admin($id);
                      $data['role'] = $this->mdl_admin->get_admin_role();
                      $data['content'] = 'admin/add_admin';
                      $this->load->view('admin/template/content',$data);
                    }
                    elseif($id = $this->uri->segment(3) == TRUE){
                      $this->load->model('mdl_admin');
                      $id = $this->mdl_admin->update_admin($data,$id);
                      $data['rows'] = $this->mdl_admin->get_certain_admin($id);
                      $data['content'] = 'admin/add_admin';
                      $this->load->view('admin/template/content',$data);  
                    }
                    
                }
        }

        public function list_admin() {
            $this->load->model('mdl_admin');
            $data['rows'] =  $this->mdl_admin->list_all_admin();
            $data['content'] = 'admin/list_admin';
            $this->load->view('admin/template/content',$data);
            
        }
        
        public function delete_admin() {
            $this->load->model('mdl_admin');
            if($this->mdl_admin->delete_admin($this->uri->segment(3))) { 
                $data['rows'] =  $this->mdl_admin->list_all_admin();
                $data['error'] = '<div class="panel panel-default"> your changes updated successfully !</div>';
                $data['content'] = 'admin/list_admin';
                $this->load->view('admin/template/content',$data);
            }
        }
        
        public function edit_admin() {
            
            if(!$_POST){
                $id = $this->uri->segment(3);
                $this->load->model('mdl_admin');
                $data['rows'] = $this->mdl_admin->get_certain_admin($id);
                $data['role'] = $this->mdl_admin->get_admin_role();
                $data['content'] = 'admin/add_admin';
                $this->load->view('admin/template/content',$data); 
                
            }
            else {
            $data = array(
                'id' => $this->uri->segment(3),
                'username' => $this->input->post('username'),
                'pass' => $this->input->post('password'),
                'mail' => $this->input->post('mail'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'photo' => $this->input->post('photo_up'),
                'role' => $this->input->post('admin_role'),
                'status' => $this->input->post('admin_status')
            );
            
            $id = $this->uri->segment(3);
            $this->load->model('mdl_admin');
            $this->mdl_admin->update_admin($data);
            $data['rows'] = $this->mdl_admin->get_certain_admin($id);
            $data['role'] = $this->mdl_admin->get_admin_role();
            $data['error'] = '<div class="panel panel-default"> your changes updated successfully !</div>';
            $data['content'] = 'admin/add_admin';
            $this->load->view('admin/template/content',$data);
            }
            
        }

        








        public function log_out() {
             $this->session->sess_destroy();
             $this->index();
        }
        
        
        
        
        
    }