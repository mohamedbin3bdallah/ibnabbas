

    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> compose new mail  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title clearfix"> <h4 class="pull-left"> message details </h4>
                                </div>    
                            </div> <!-- end of panel-heading -->
                                 <div class="panel-body">
                                                            <?php if(isset($error) && !empty($error)) { echo $error;} ?>
                                                                <?php echo validation_errors(); ?>
                                                                <?php if(isset($rows)) { foreach ($rows as $r){ } }?>
                                                                <?php  echo form_open_multipart('message/send_message'); ?>
                                                        <div class="table-responsive">
                                                            <div style="padding: 10px;" class="meta-data">
                                                                <h4>your mail will sent from <span style="background: #dedede;padding: 5px 10px; margin: 0px 5px;"> <?php if(isset($r->sender_mail)){ echo $r->sender_mail;} ?>  </span> to change this 
                                                                    <a style="text-decoration: underline;" href="<?php echo base_url(); ?>message/setting"> click here</a> </h4>
                                                            </div>
                                                            <table class="table ">
                                                                <tr>
                                                                    <td class="label-admin"> To </td>
                                                                    <td> <input type="text" name="sendermail" value="<?php if(isset($r->sender_mail)){ echo $r->sender_mail;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> bcc </td>
                                                                    <td> <input type="text" name="copymail" value="<?php if(isset($r->mail_pass)){ echo $r->mail_pass;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> subject  </td>
                                                                    <td> <input type="text" name="subj" value="<?php if(isset($r->mail_subj)){ echo $r->mail_subj;} ?>" />  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> message details </td>
                                                                    <td> 
                                                                        <textarea name="msg" class="content">
                                                                             
                                                                        </textarea>
                                                                    </td>
                                                                </tr>
                                                            </table> <!-- end of table -->
                                                        </div> <!-- end of responsive -->
       
                                </div>
                                <div class="panel-footer ">
                                    <div class="" pull-right>
                                        <button type="submit" value="save" class="btn btn-success"><i class="fa fa-save"></i> send message </button>
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
    

