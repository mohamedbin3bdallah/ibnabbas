
    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> add page  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> page items </h4></div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">
                                <div class="tab-panel">
                                     
                                    <div class="table-responsive"> 
                                        <table class="table table-striped table-bordered tabular-data" > 
                                            <tr> 
                                                <th> SN </th> <th> user name </th> <th> user email </th> <th> comments </th>  <th>  <span class="glyphicon glyphicon-remove"> </span> delete </th>
                                                <th>  <span class="glyphicon glyphicon-remove"> </span> delete </th>
                                            </tr>
                                            <?php  foreach($rows as $r){ ?>
                                            <tr> 
                                                <td><?php echo $r->cmt_id; ?> </td>  
                                                <td width="10%"> <?php echo $r->cmt_name; ?> </td> 
                                                <td> <?php echo $r->cmt_email; ?> </td>
                                                <td width="50%"> <?php echo $r->cmt_details; ?> </td>
                                                <td> 
                                                <a href="<?php echo base_url(); ?>index.php/marketing/approve_comment/<?php echo $r->cmt_id; ?>">
                                                    <?php 
                                                        if($r->status == '1'){?>
                                                         <button  class="btn btn-success"> 
                                                                <span class="glyphicon glyphicon-check"></span> approved </button>  
                                                    <?php  }?>
                                                    <?php 
                                                        if($r->status == '0'){?>
                                                         <button  class="btn btn-danger"> 
                                                                <span class="glyphicon glyphicon-info-sign"></span> pending.. </button>  
                                                    <?php  }?>
                                                 </a>
                                                </td>
                                                <td> <span class="glyphicon glyphicon-remove"> <a href="<?php echo base_url(); ?>index.php/marketing/delete_comment/<?php echo $r->cmt_id;  ?>"> </span> delete </a></td>    
                                            </tr>
                                            <?php }  ?> 
                                        </table>
                                    </div>
                                    
                                </div>
                            </div> <!-- end of panel-body -->
                            <div class="panel-footer ">
                                <div class="" pull-right>
                                    <button type="submit" value="save" class="btn btn-success"><i class="fa fa-save"></i> save </button>
                                    <button type="button" value="cancel" class="btn btn-danger"><i class="fa fa-times"></i> cancel </button>
                                    <button type="reset" value="reset" class="btn btn-primary"><i class="fa fa-eraser"></i> reset </button>
                                </div>
                            </div>
                        </div> <!-- end of panel-default -->
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->