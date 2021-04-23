


    <!-- *************************************************************  begin of page contents ********************************************************** -->
    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> list all senders </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> senders details </h4>
                                
                                    
                                </div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">
                                                    <div class="tab-pane active" id="home">
                                                        <div class="table-responsive">
          
                                                            <table class="table table-striped">
                                                                <tr> <th> SN </th>  <th> sender mail </th>  <th> edit </th> <th> delete </th></tr>
                                                                <?php foreach ($rows as $r) { ?>
                                                                <tr class="meta-bordered"> 
                                                                    <td> <?php echo $r->sender_id; ?> </td> 
                                                                    <td> <?php echo $r->sender_mail; ?> </td>
                                                                    <td class="meta-action"><a href="<?php echo base_url(); ?>message/compose_mail/<?php echo $r->sender_id; ?>"> <button class="btn btn-info"> <i class="fa fa-edit"> </i> send message </button> </a></td>
                                                                    <td class="meta-action"><a href="<?php echo base_url(); ?>message/delete_message/<?php echo $r->sender_id; ?>"> <button class="btn btn-info"> <i class="fa fa-close"></i> delete </button> </a></td>
                                                                </tr>
                                                                <?php } ?>
                                                            </table>
                                                        </div> <!-- end of table responsive -->
                                                    </div>
            
                            <div class="panel-footer">
                                <p> pagination goes here </p>
                            </div>
                        </div> <!-- end of panel-default -->
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
