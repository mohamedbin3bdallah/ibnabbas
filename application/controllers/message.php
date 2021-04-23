
<?php

    class message extends CI_Controller {
        
        public function setting(){
            $this->load->model('mdl_msg');
            $data['rows'] = $this->mdl_msg->get_msg_setting();
            $data['content'] = 'admin/setting';
            $this->load->view('admin/template/content',$data);
        }
        
        public function compose_mail() {
            $id = $this->uri->segment(3);
            $this->load->model('mdl_msg');
            $data['rows'] = $this->mdl_msg->get_all_sender($id);
            $data['content'] = 'admin/mail';
            $this->load->view('admin/template/content',$data);
        }

        public function change_config() {
            $data = array(
                'from' => $this->input->post('mailfrom'),
                'pass' => $this->input->post('mailpass'),
                'subj' =>  $this->input->post('subj'),
                'msg' => $this->input->post('msg')
            );
            
                $this->load->library('form_validation');
                $this->form_validation->set_rules('mailfrom','mail from','required|trim|valid_email');
                $this->load->model('mdl_msg');
                $this->mdl_msg->update_msg_setting($data);
                $data['rows'] = $this->mdl_msg->get_msg_setting();
                $data['content'] = 'admin/setting';
                $this->load->view('admin/template/content',$data);
        }
        
        public function list_message() {
            $this->load->model('mdl_msg');
            $data['rows'] = $this->mdl_msg->get_all_sender();
            $data['content'] = 'admin/list_message';
            $this->load->view('admin/template/content',$data);
        }
        
        public function inbox() {
            $this->load->model('mdl_msg');
            $data['num'] = $this->mdl_msg->count_mail();
        }

        public function delete_message() {
            $this->load->model('mdl_msg');
            $this->mdl_msg->remove_msg($this->uri->segment(3));
            $data['rows'] = $this->mdl_msg->get_all_sender();
            $data['content'] = 'admin/list_message';
            $this->load->view('admin/template/content',$data);
        }
        
        public function send_message() {
            
            if($_POST){
                $to = $this->input->post('sendermail');
                $msg = $this->input->post('msg');
                }
            require_once ('themes/message-formal.php');
            $this->load->model('mdl_msg');
            $result = $this->mdl_msg->get_msg_setting();
            foreach ($result as $c) {
                $from = $c->mail_from;
                $pass = $c->mail_pass;
                $subj = $c->mail_subj;
                $msg = $c->mail_msg;
            };
            
             $this->load->helper('email');
             $this->load->library('email');
              
             $config['protocol']    = 'smtp';
             $config['smtp_host']    = 'ssl://server.mediargroup.com';
             $config['smtp_port']    = '465';
             $config['smtp_timeout'] = '7';
             $config['smtp_user']    = $c->mail_from;
             $config['smtp_pass']    = $c->mail_pass;
             $config['charset']    = 'utf-8';
             $config['newline']    = "\r\n";
             $config['mailtype'] = 'html'; // or html
             $config['validation'] = TRUE; // bool whether to validate email or not 
        
             $this->email->initialize($config);
             $this->email->from($c->mail_from, $c->mail_subj);
             $this->email->to($to);
             $this->email->subject($c->mail_subj);
             $this->email->message($new_msg); 
             
             if($this->email->send())
                {
                    echo 'everything is ok';
                }
                else {
                        
                    echo $this->email->print_debugger();
                }
              
              
              
              
              
              
            
            //$data['content'] = 'send_message';
            //$this->load->view('admin/template/content',$data);
            
        }
        
    }
