


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"> image manager </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5"><a href="parent" data-toggle="tooltip" title="button parent" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a> 
                    <a href="refresh" data-toggle="tooltip" title="refresh" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>
                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data"> 
                      <input style="display:none;" type="file" name="file" id="file" required class="btn btn-info" />
                      <button type="button" data-toggle="tooltip" title="button upload" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>
                      <button type="button" data-toggle="tooltip" title="button folder" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>
                      <button type="button" data-toggle="tooltip" title="button delete" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                      <button type="submit" class="btn btn-info" id="submitted"> <i class="fa fa-upload"> </i> upload </button>
                    </form>
                    </div>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="text" name="search" value="filter name" placeholder="search" class="form-control">
                            <span class="input-group-btn">
                            <button type="button" data-toggle="tooltip" title="button search" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-6">
                        <div id="image_preview"> <a href="#"> <img id="previewing" src="<?php echo base_url(); ?>images/noimage.png" /> </a> </div> 
                    </div>
                    <div class="col-md-6">
                        <div id="message"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> 
                
            </div>
        </div>
    </div>
</div>

    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> add new admin  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> admin details </h4></div>    
                            </div> <!-- end of panel-heading -->
                                 <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <?php if(isset($error) && !empty($error)) { echo $error; } ?>
                                                                <?php echo validation_errors(); ?>
                                                                <?php if(isset($rows)) { foreach ($rows as $r){ } }?>
                                                                <?php if(!isset($rows)){ echo form_open_multipart('admin/add_new_admin');} else{echo form_open_multipart('admin/edit_admin/'.$r->ad_id);} ?>
                                                                <tr>
                                                                    <td class="label-admin"> user name </td>
                                                                    <td> <input type="text" name="username" value="<?php if(isset($r->ad_username)){ echo $r->ad_username;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> password </td>
                                                                    <td> <input type="password" name="password" value="<?php if(isset($r->ad_password)){ echo $r->ad_password;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> confirm password </td>
                                                                    <td> <input type="password" name="confirm_password" value="<?php if(isset($r->ad_password)){ echo $r->ad_password;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> E-mail </td>
                                                                    <td> <input type="text" name="mail" value="<?php if(isset($r->ad_mail)){ echo $r->ad_mail;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> First Name </td>
                                                                    <td> <input type="text" name="fname" value="<?php if(isset($r->ad_fname)){ echo $r->ad_fname;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Last Name </td>
                                                                    <td> <input type="text" name="lname" value="<?php if(isset($r->ad_lname)){ echo $r->ad_lname;} ?>" />  </td>
                                                                </tr>
                                                                
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
                            
                       
                                            <div class="table-responsive">
                                                <table class="table ">
                                                    <tr class="meta-bordered"> 
                                                        <td> featured image  </td> 
                                                        <td colspan="3"> 
                                                            <button type="button" id="image_btn" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                                                <img src="<?php if(isset($r->ad_photo)){ echo base_url().$r->ad_photo;}  else {echo base_url().'images/noimage.png';} ?>"
                                                                         alt="" width="150" height="150" />  
                                                                <input type="hidden" id="hiddenfield" value="<?php  if(isset($r->ad_photo)){ echo $r->ad_photo;} ?>" name="photo_up" />
                                                            </button>
                                                            <!-- Button trigger modal -->
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td> admin role </td> 
                                                        <td> 
                                                            <select class="form-control" name="admin_role">
                                                                <option value="<?php if(isset($r->role_id)){ echo $r->role_id; }  ?>" >
                                                                    <?php if(isset($r->role_id)){ echo $r->role_name; } ?> </option>
                                                                <option> ------------------ </option>
                                                                <?php 
                                                                 foreach ($role as $l){
                                                                     echo '<option value="'.$l->role_id.'" >'.$l->role_name.'</option>';
                                                                 }
                                                                ?>
                                                            </select> 
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td> status </td>
                                                        <td> 
                                                            <select class="form-control" name="admin_status">
                                                                <option value="1" > enable </option>
                                                                <option value="0" > disable </option>
                                                                
                                                            </select> </td>
                                                    </tr>
                                                </table>
                                            </div> <!-- end of table responsive -->
                                </div>
                                
                                <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#add_button').on('click',function(e){
                                            e.preventDefault();
                                                var output = '';
                                                    output += '<tr class="meta-bordered">';  
                                                    output += '<td colspan="3">';
                                                    output += '<div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">';             
                                                    output += '<img src="<?php echo base_url();?>images/noimage.png" alt="" width="60" height="60" />';                  
                                                    output += '</div>';
                                                    output += '</td>';
                                                    output += '</td>';                
                                                    output += '</td>';            
                                                    output += '<td> </td>';            
                                                    output += '</tr>';        
                                             $('#extra tbody').append(output);       
                                        }); 
                                    });
                                </script>
                                
                                
                            </div> <!-- end of panel-body -->
                            <div class="panel-footer ">
                                <div class="" pull-right>
                                    <button type="submit" value="save" class="btn btn-success"><i class="fa fa-save"></i> 
                                        <?php if($this->uri->segment(3) == TRUE) { echo 'update';} else { echo 'save';} ?> 
                                    </button>
                                    <button type="button" value="cancel" class="btn btn-danger"><i class="fa fa-times"></i> cancel </button>
                                    <button type="reset" value="reset" class="btn btn-primary"><i class="fa fa-eraser"></i> reset </button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div> <!-- end of panel-default -->
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
    

