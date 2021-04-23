

    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> messageing dashboard  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> message configuration </h4></div>    
                            </div> <!-- end of panel-heading -->
                                 <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <?php if(isset($error) && !empty($error)) { echo $error;} ?>
                                                                <?php echo validation_errors(); ?>
                                                                <?php if(isset($rows)) { foreach ($rows as $r){ } }?>
                                                                <?php  echo form_open_multipart('message/change_config'); ?>
                                                                <tr>
                                                                    <td class="label-admin"> E-mail send from </td>
                                                                    <td> <input type="text" name="mailfrom" value="<?php if(isset($r->mail_from)){ echo $r->mail_from;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> e-mail password </td>
                                                                    <td> <input type="password" name="mailpass" value="<?php if(isset($r->mail_pass)){ echo $r->mail_pass;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> subject  </td>
                                                                    <td> <input type="text" name="subj" value="<?php if(isset($r->mail_subj)){ echo $r->mail_subj;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> message details </td>
                                                                    <td> 
                                                                        <textarea name="msg" class="content">
                                                                            <?php if(isset($r->mail_msg)){ echo $r->mail_msg;} ?> 
                                                                        </textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> select mail thenme </td>
                                                                    <td> 
                                                                        <select class="form-control" name="mail_theme">
                                                                            <option> 1 <img src="<?php echo base_url(); ?>upload/abookapart-rwd.jpg" /> </option>
                                                                            <option> 2 </option>
                                                                            <option> 3 </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> select mail thenme </td>
                                                                    <td> 
                                                                        
                                                                    </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
       
                                </div>
                                <div class="panel-footer ">
                                    <div class="" pull-right>
                                        <button type="submit" value="save" class="btn btn-success"><i class="fa fa-save"></i> update setting </button>
                                        <a href="<?php echo base_url();?>message/list_message"><button type="button" value="cancel" class="btn btn-danger"><i class="fa fa-times"></i> cancel </button> </a>
                                    </div>
                                </div>
                                
                            </div> <!-- end of panel-body -->
                            <?php echo form_close(); ?>
                        </div> <!-- end of panel-default -->
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
    

