

<?php 

class ch_lang extends CI_Controller {
    
    function index() {
        
        
    }
    
    function change($type) {
        
        $this->session->set_userdata('lang',$type);
        
    }
}