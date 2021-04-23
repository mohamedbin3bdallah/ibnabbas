

    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> add category  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> category details </h4></div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">

                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <?php if(isset($rows)) { foreach ($rows as $r){ } }?>
                                                                <?php if(!isset($rows)){ echo form_open_multipart('category/create_cat');} else{echo form_open_multipart('category/edit_cat/'.$r->cat_id);} ?>
                                 
                                                                <tr>
                                                                    <td> category name </td>
                                                                    <td> <input type="text" name="name" value="<?php if(isset($r->cat_name)){ echo $r->cat_name;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> category description </td>
                                                                    <td> 
                                                                        <textarea  name="desc" class="content"> 
                                                                            <?php if(isset($r->cat_desc)){ echo $r->cat_desc;} ?>
                                                                        </textarea> </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
         
                                
                            </div> <!-- end of panel-body -->
                            <div class="panel-footer ">
                                <div class="" pull-right>
                                    <button type="submit" value="save" class="btn btn-success"><i class="fa fa-save"></i> 
                                        <?php if($this->uri->segment(3) == TRUE || isset($rows)) { echo 'update';} else { echo 'save';} ?> 
                                    </button>
                                    <a href="<?php echo base_url();?>category/list_cat"> 
                                        <button type="button" value="cancel" class="btn btn-danger"><i class="fa fa-times"></i> cancel </button>
                                    </a>
                                    <button type="reset" value="reset" class="btn btn-primary"><i class="fa fa-eraser"></i> reset </button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div> <!-- end of panel-default -->
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
    

