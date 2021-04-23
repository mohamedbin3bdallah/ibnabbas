

<?php

    class ajax_php_file extends CI_controller {
        
        
        
        public function do_upload() {
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

        public function ajax_upload() {
            if(isset($_FILES["file"]["type"]))
                {
                    $validextensions = array("jpeg", "jpg", "png","gif","tiff","bmp");
                    $temporary = explode(".", $_FILES["file"]["name"]);
                    $file_extension = end($temporary);
                    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
                    ) && ($_FILES["file"]["size"] < 2000000)//Approx. 100kb files can be uploaded.
                    && in_array($file_extension, $validextensions)) {
                    if ($_FILES["file"]["error"] > 0)
                    {
                        echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
                    }
                    else
                    {
                        if (file_exists("uploading/upload/" . $_FILES["file"]["name"])) {
                            echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
                    }
                        else
                    {
                        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                        $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
                        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                        
                        
                        echo  $pic =$_FILES["file"]["name"];
                    }
                    }
                    }
                        else
                    {
                        echo "<span id='invalid'>***Invalid file Size or Type***<span>";
                    }
            }
        }
        
        public function get_image(){
            $data = $this->ajax_upload();
            $this->load->view('add_page',$data);
        }
    }



