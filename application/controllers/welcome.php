<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function do_upload(){
            if($_POST){
                 //$path = base_url().'upload/';
                $config = array(
                    'upload_path' => './upload',
                    'allowed_types' => 'jpeg|jpg|png|gif'
                );
                $this->load->library('upload',$config);
                if($this->upload->do_upload()){
                    echo $this->upload->data();
                    echo 'there is upload success';
                }
            }
        }
        
        public function show_dashboard(){
            $data['content'] = 'dashboard';
            $this->load->view('template/content',$data);
        }

        public function start_upload(){
            echo 'hello world';
        }
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */