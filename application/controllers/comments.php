<?php

    class comments extends CI_Controller {
        
        public function list_comments(){
            
            $data['content'] = 'admin/list_comments';
            $this->load->view('admin/template/content',$data);
        }
     
        
    }