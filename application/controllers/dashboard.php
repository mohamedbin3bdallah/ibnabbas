<?php


    class dashboard extends CI_Controller {
        
        public function index(){

            $this->load->model('mdl_admin');
            $this->load->model('mdl_msg');
            $data['current_user'] = $this->session->userdata('user');
            $data['user'] = $this->mdl_admin->get_certain_admin_user($this->session->userdata('user'));
            $data['num'] = $this->mdl_msg->count_mail();
            $data['content'] = 'admin/dashboard';
            $this->load->view('admin/template/content',$data);
        }

        
        
    } // end of dashboard 

        