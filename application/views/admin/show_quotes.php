

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
            <div class="page-title"> <h3> add quote video  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> video items </h4></div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">
                                <div class="tab-panel">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#general" data-toggle="tab"> general </a></li>
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
                                                                <?php if(!isset($rows)){ echo form_open_multipart('homepage/create_quote');} else{echo form_open_multipart('homepage/edit_quote/'.$r->quote_id);} ?>
                                                                <tr>
                                                                    <td> message title </td>
                                                                    <td> <input type="text" name="quote_title" value="<?php if(isset($r->quote_title)){ echo $r->quote_title;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> video message </td>
                                                                    <td> <input type="text" name="quote_url" value="<?php if(isset($r->quote_url)){ echo $r->quote_url;} ?>" />  </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
                                                    </div> <!-- end oftab-pane -->
                                                    <div class="tab-pane" id="ar">
                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <tr>
                                                                    <td> عنوان الرسالة  </td>
                                                                    <td> <input type="text" name="quote_title_ar" value="<?php if(isset($r->quote_title_ar)){ echo $r->quote_title_ar;} ?>" />  </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
                                                    </div> <!-- end oftab-pane -->
                                                </div> <!-- end of tab-content -->
                                            </div> <!-- end of tabable -->
                                        </div> <!-- end of tab-pane -->

                                    </div> <!-- end of tab-content -->
                                </div>
                                
                 
                                
                                
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
    

