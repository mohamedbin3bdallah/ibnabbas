



    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> Gallery Details  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4> gallery items</h4>
                            </div>
                            
                            <div style="margin: 10px 0px;" class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-danger" id="delete_file"> <i class="fa fa-trash"> </i> delete file  </button>
                                    <button class="btn btn-danger" id="create_foder"> <i class="fa fa-folder"> </i> create a folder  </button>
                                    <button class="btn btn-danger"> <i class="fa fa-refresh"> </i> refresh  </button>
                                </div> <!-- end of col-md-12 -->
                                <div class="col-md-6">
                                    <button class="btn btn-info"> <i class="fa fa-upload"> </i> upload file  </button>
                                </div> <!-- end of col-md-12 -->
                            </div>
                            
                            <div class="panel-body">
                                <div class="tabs-panel">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#photo" data-toggle="tab"> Photo Gallery </a></li>
                                        <li><a href="#video" data-toggle="tab"> Video Gallery </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="photo">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <button class="btn btn-default"><i class="fa fa-folder fa-6x"> </i> </button>
                                                    
                                                            <?php
                                                            /*
                                                                $dir = "./upload/";
                                                                // Open a directory, and read its contents
                                                                if (is_dir($dir)){
                                                                  if ($dh = opendir($dir)){
                                                                    while (($file = readdir($dh)) !== false){
                                                                      echo "filename:" . $file . "<br>";  
                                                                      if(is_dir($file)){
                                                                          echo glob($file,GLOB_ONLYDIR);
                                                                      }
                                                                    }
                                                                    closedir($dh);
                                                                  }
                                                                }
                                                             * 
                                                           
                                                            
                                                            //path to directory to scan
                                                                $directory = "./upload/";
                                                                $files = glob($directory."*",GLOB_ONLYDIR );
                                                                $files = str_replace("upload/",'', $files);
                                                                foreach($files as $file)
                                                                {
                                                                    if(is_dir($file))
                                                                    {
                                                                        echo '<button class="btn btn-default"><i class="fa fa-folder fa-6x"> </i>'.$file.'</button>';
                                                                    }
                                                                }
                                                                */
                                                            
                                                            $directory = './upload/';
                                                            $dirs = array_filter(glob($directory.'*'), 'is_dir');
                                                            foreach ($dirs as $d) {
                                                                echo( $d);
                                                            }
                                                            
                                                            ?>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <?php
                                                    foreach ($map as $image){ ?>
                                                        <div class="col-md-2">
                                                            <div style="" class="image_wrapper">
                                                                <img src="<?php echo base_url().'upload/'.$image?>" alt="" class="img-responsive" width="100%" height="150"/>
                                                                <label>
                                                                    <input type="checkbox" name="path[]" value="<?php echo $image; ?>" /> <span> <?php echo $image; ?> </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                <?php } ?>
                                            </div>
                                        </div> <!-- end of tab-pane -->
                                        <div class="tab-pane" id="video">
                                            
                                        </div> <!-- end of tab-pane -->
                                    </div> <!-- end of tab-content -->
                                </div>
                            </div>
                                                <?php echo $this->pagination->create_links(); ?>
                            <div id="message"> </div>
                        </div>
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
    

