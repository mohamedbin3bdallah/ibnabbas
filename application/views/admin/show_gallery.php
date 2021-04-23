



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
                                    <!-- <button class="btn btn-danger" id="delete_file"> <i class="fa fa-trash"> </i> delete file  </button>
                                    <button class="btn btn-danger" id="create_foder"> <i class="fa fa-folder"> </i> create a folder  </button>
                                    <button class="btn btn-danger"> <i class="fa fa-refresh"> </i> refresh  </button> -->
                                </div> <!-- end of col-md-12 -->
                                <div class="col-md-6">
                                    <?php echo form_open_multipart('gallery/add_photo'); ?>
                                    <input type="file" name="userfile" style="display:inline;"/> 
                                    <button style="display:inline; padding: 7px 10px;" class="btn btn-info" type="submit"> <i class="fa fa-upload"> </i> upload file  </button>
                                    <?php echo form_close(); ?>
                                </div> <!-- end of col-md-12 -->
                            </div>
                            
                            <div class="panel-body">
                                <div class="tabs-panel">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#photo" data-toggle="tab"> Photo Gallery </a></li>
                                        <li><a href="#video" data-toggle="tab"> Video Gallery </a></li>
										<li><a href="#audio" data-toggle="tab"> Audio Gallery </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="photo">
                                            <div class="row">
                                                
                                                    <?php
                                                    
                                                    foreach ($photos as $pic){ ?> 
                                                    <div class="col-md-2">
                                                        <img src="<?php echo base_url(); ?>upload/gallery/<?php echo $pic->photo_url;?>" style="float: left;margin: 10px;"  width="250" height="150" />
                                                        <a href="<?php echo base_url(); ?>gallery/delete_file/<?php echo $pic->photo_id; ?>">
                                                        <button style="margin: -10px 10px;padding: 3px 10px;" type="button" class="btn btn-danger"> <span class="fa fa-remove"></span> delete </button>
                                                        <input type="hidden" name="photo" value="<?php echo $pic->photo_id; ?>" /> 
                                                        </a>
                                                    </div>
                                                    <?php } ?>
                                                    

                                                    
                                                    
                                                
                                            </div>
                                            <hr/>
                                            
                                        </div> <!-- end of tab-pane -->
                                        <div class="tab-pane" id="video">
                                            <div class="row">
                                                <?php echo form_open_multipart('gallery/add_video'); ?>
                                                
                                                <table class="table">
                                                    <tr>
                                                        <td style="width:25%;"> <label> Enter Video Url : </label></td>
                                                        <td> <input type="text" name="video_url" /> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-info" type="submit"><i class="fa fa-save"> </i> save </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <?php echo form_close(); ?>
                                            </div>
                                            <div style="padding: 20px;" class="separation"> </div>
                                            <hr/>
                                            
                                            <?php
                                                    foreach ($videos as $vid){ ?> 
                                                    <div class="col-md-4">
                                                        <iframe width="460" height="285" src="https://www.youtube.com/embed/<?php echo str_replace('https://www.youtube.com/watch?v=', '', $vid->video_url);?>" frameborder="0" allowfullscreen></iframe>
                                                        <a href="<?php echo base_url(); ?>gallery/delete_video/<?php echo $vid->video_id; ?>">
                                                        <button style="margin: -10px 10px;padding: 3px 10px;" type="button" class="btn btn-danger"> <span class="fa fa-remove"></span> delete </button>
                                                        </a>
                                                    </div>
                                                    <?php } ?>
                                            
                                        </div> <!-- end of tab-pane -->
										
										<div class="tab-pane" id="audio">
                                            <div class="row">
											<?php echo form_open('gallery/add_audio'); ?>
                                                
                                                <table class="table">
                                                    <tr>
                                                        <td style="width:25%;"> <label> Enter Audio Url : </label></td>
                                                        <td> <input type="text" name="audio_url" /> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-info" type="submit"><i class="fa fa-save"> </i> save </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <?php echo form_close(); ?>
											</div>
                                            <div style="padding: 20px;" class="separation"> </div>
                                            <hr/>
												
                                                    <?php                                                    
                                                    foreach ($audios as $audio){ ?> 
                                                    <div class="col-md-2">
                                                        <?php echo $audio->audio_url; ?>
														<a href="<?php echo base_url(); ?>gallery/delete_audio/<?php echo $audio->id; ?>">
                                                        <button style="margin: -10px 10px;padding: 3px 10px;" type="button" class="btn btn-danger"> <span class="fa fa-remove"></span> delete </button>
                                                        </a>
                                                    </div>
                                                    <?php } ?>                                        
                                            <hr/>                                            
                                        </div> <!-- end of tab-pane -->
                                    </div> <!-- end of tab-content -->
                                </div>
                            </div>
                                                
                            <div id="message"> </div>
                        </div>
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
    

