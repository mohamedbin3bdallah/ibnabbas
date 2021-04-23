<?php
    class home_page extends CI_Controller {        
        public function __construct() {
            parent::__construct();
            $lang=$this->session->userdata('lang')==null?'english':$this->session->userdata('lang');
            //$lang='english';
            $this->lang->load($lang,$lang);
        }
        
        public function index() {
            $this->load->library('pagination');
            $path = base_url();
            $config['base_url'] = $path;
            $config['total_rows'] = count(directory_map('./upload/gallery', 0));
            $config['per_page'] = 8;
            $this->pagination->initialize($config); 
            
            $this->load->model('mdl_post');
            $this->load->model('mdl_homepage');
            $this->load->model('mdl_page');
            $this->load->model('mdl_gallery');
            $this->load->model('mdl_marketing');
            $data['social'] = $this->mdl_marketing->get_social();
            $data['rows'] = $this->mdl_post->get_all_post();
            $data['slider'] = $this->mdl_homepage->get_slider();
            $data['quotes'] = $this->mdl_homepage->get_quote();
            $data['photos'] = $this->mdl_gallery->get_photo();
            $data['videos'] = $this->mdl_gallery->get_video();
			$data['audios'] = $this->mdl_gallery->get_audio();
            $data['pages'] = $this->mdl_page->get_page_data();
            $data['content'] = 'front/home';
            $this->load->view('front/template/content',$data);
            
                        
        } 
        
        function change($type){
             $this->session->set_userdata('lang',$type);
             redirect("","refresh");
        }
        
        public function subscribe2() {
            echo 'hello gys';
        }
        
        public function subscribe() {
            
            if($_POST){
                $mail = $this->input->post('email');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email','email','required|trim|valid_email');
                
            if($this->form_validation->run() == FALSE) {
                    $this->index();
                }
            elseif($this->form_validation->run() == TRUE) {
                    $this->load->model('mdl_msg');
                    $data['result'] = $this->mdl_msg->add_sender($mail);
                    echo 'you subscribed to our website successfully';
                }
            }
        }
        
        public function send_message(){
            
            if($_POST){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('name','name','required');
                $this->form_validation->set_rules('email','email','required|valid_email');
                $this->form_validation->set_rules('message','message','required');
                if ($this->form_validation->run() == FALSE)
                    {
                    $this->index();
                    }
            else {
                /*$data_msg = array(
                    'name' => $this->input->post('name'),
                    'mail' => $this->input->post('email'),
                    'msg' => $this->input->post('message')
                );
                $this->load->model('mdl_contact');
				$this->mdl_contact->save_message($data_msg);*/
				
				$to = 'Ibn Abbass <info@ibnabbass.com>';
				$from = $this->input->post('name') . ' <' . $this->input->post('email') . '>';
				$subject = 'Message from ' . $this->input->post('name') . ' - Contact Form ';	
				$message = '
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
					"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
						<head></head>
						<body>
							<table>
								<tr><td>Name</td><td>' . $this->input->post('name') . '</td></tr>
								<tr><td>Email</td><td>' . $this->input->post('email') . '</td></tr>
								<tr><td>Comment</td><td>' . nl2br($this->input->post('message')) . '</td></tr>
							</table>
						</body>
					</html>';
				
				$headers = "MIME-Version: 1.0" . "\r\n";
				//$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: ' . $from . "\r\n";
	
				mail($to,$subject,$message,$headers);
				
                $data['popup'] =  "<div class='well well-success'>  your message has been sent successfully"
                                     . "<button type='button' class='close' aria-label='Close'><span aria-hidden='true'> x </span></button> </div>";
                $data['content'] = 'home/home_page' ;
                redirect("","refresh");
                }
            } // IF IT POST 
        }
        
        

        
        
    } // end of controller 