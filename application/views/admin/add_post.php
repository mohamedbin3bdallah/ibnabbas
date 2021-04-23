

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
            <div class="page-title"> <h3> add post  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> post items </h4></div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">
                                <div class="tab-panel">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#general" data-toggle="tab"> general </a></li>
                                        <li><a href="#data" data-toggle="tab"> data </a></li>
                                        <li><a href="#extra" data-toggle="tab"> extra options </a></li>
                                    </ul> 
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="general">
                                            <div class="tabable">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#en" data-toggle="tab"> english </a></li>
                                                    <li><a href="#ar" data-toggle="tab"> arabic </a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="en">
                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <?php if(isset($rows)) { foreach ($rows as $r){ } }?>
                                                                <?php if(!isset($rows)){ echo form_open_multipart('post/create_post');} else{echo form_open_multipart('post/edit_post/'.$r->post_id);} ?>
                                                                <tr>
                                                                    <td> post title </td>
                                                                    <td> <input type="text" name="post_title_en" value="<?php if(isset($r->post_title)){ echo $r->post_title;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> post description </td>
                                                                    <td> <textarea  name="post_desc_en" class="content"> 
                                                                            <?php if(isset($r->post_desc)){ echo $r->post_desc;} ?>
                                                                        </textarea> </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
                                                    </div> <!-- end oftab-pane -->
                                                    <div class="tab-pane" id="ar">
                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <tr>
                                                                    <td> عنوان المحتوى  </td>
                                                                    <td> <input type="text" name="post_title_ar" value="<?php if(isset($r->post_title_ar)){ echo $r->post_title_ar;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> تفاصيل المحتوى  </td>
                                                                    <td> <textarea  name="post_desc_ar"  class="content"> 
                                                                              <?php if(isset($r->post_desc_ar)){ echo $r->post_desc_ar;} ?>
                                                                        </textarea> </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
                                                    </div> <!-- end oftab-pane -->
                                                </div> <!-- end of tab-content -->
                                            </div> <!-- end of tabable -->
                                        </div> <!-- end of tab-pane -->
                                        <div class="tab-pane" id="data">
                                            <div class="table-responsive">
                                                <table class="table ">
                                                    <tr class="meta-bordered"> 
                                                        <td> featured image  </td> 
                                                        <td colspan="3"> 
                                                            <button type="button"  class="btn btn-primary btn-lg image_btn" data-toggle="modal" data-target="#myModal">
                                                                <img src="<?php if(isset($r->post_photo)){ echo base_url().$r->post_photo;}  else {echo base_url().'images/noimage.png';} ?>"
                                                                         alt="" width="150" height="150" />  
                                                                <input type="hidden" id="hiddenfield" value="<?php  if(isset($r->post_photo)){ echo $r->post_photo;} ?>" name="photo_up" />
                                                            </button>
                                                            <!-- Button trigger modal -->
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td> page target </td> 
                                                        <td> 
                                                            <select class="form-control" name="post_target">
                                                                <option value="<?php if(isset($r->page_id)){ echo $r->page_id; }  ?>" >
                                                                    <?php if(isset($r->page_id)){ echo $r->page_name; } ?> </option>
                                                                <option> ------------------ </option>
                                                                <?php 
                                                                 foreach ($page as $p){
                                                                     echo '<option value="'.$p->page_id.'" >'.$p->page_name.'</option>';
                                                                }
                                                                ?>
                                                            </select> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> category target </td> 
                                                        <td> 
                                                            <select class="form-control" name="post_cat">
                                                                <option value="<?php if(isset($r->post_cat)){ echo $r->post_cat; }  ?>" >
                                                                    <?php 
                                                                    if(isset($r->post_cat)){
                                                                        foreach ($cat as $c){ 
                                                                            if($c->cat_id == $r->post_cat){
                                                                                echo $c->cat_name;
                                                                            }
                                                                        } 
                                                                    }
                                                                    ?>
                                                                </option>
                                                                <option> ------------------ </option>
                                                                <?php 
                                                                 foreach ($cat as $c){
                                                                     echo '<option value="'.$c->cat_id.'" >'.$c->cat_name.'</option>';
                                                                }
                                                                ?>
                                                            </select> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> item order </td>
                                                        <td> <input type="text" class="form_control" value="<?php  if(isset($r->post_order)){ echo $r->post_order;} ?>" name="post_order" /> </td>
                                                    </tr>
                                                </table>
                                            </div> <!-- end of table responsive -->
                                        </div> <!-- end of tab-pane -->
                                        <div class="tab-pane" id="extra">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <h2>  add extra photos   </h2>
                                                    <tbody> 
                                                        <tr class="meta-bordered"> 
                                                            <td colspan="3"> 
                                                                <button type="button"  class="btn btn-primary btn-lg image_btn" data-toggle="modal" data-target="#myModal">
                                                                    <img src="<?php echo base_url();?>images/noimage.png" alt="" width="60" height="60" />
                                                                    <input type="hidden" class="extraphoto" value="<?php  if(isset($r->post_photo)){ echo $r->post_photo;} ?>" name="photo_up" />
                                                                </button>
                                                            </td>
                                                            <td> <div style="margin-top: 20px;float: right;" class="btn btn-danger" id="add_button"> <i class="fa fa-plus"> </i> </div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end of table responsive -->
                                        </div> <!-- end of tab-pane -->
                                    </div> <!-- end of tab-content -->
                                </div>
                                
                                <script src="<?php echo base_url(); ?>backend/assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
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
                                        <?php if($this->uri->segment(3) == TRUE || isset($rows)) { echo 'update';} else { echo 'save';} ?> 
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
    

