


    <!-- *************************************************************  begin of page contents ********************************************************** -->
    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> admins page </h3>  
                <a href="<?php echo base_url(); ?>admin/add_admin"> <button class="btn btn-success pull-right"> <span class="glyphicon glyphicon-user"> </span> create new user</button> </a>
            </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> admin details </h4>
                                </div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">
                                                    <div class="tab-pane active" id="home">
                                                        <div class="table-responsive">
          
                                                            <table class="table table-striped">
                                                                <tr> <th> SN </th> <th> admin name </th> <th> admin role </th> <th> admin photo </th> <th> edit </th> <th> delete </th></tr>
                                                                <?php foreach ($rows as $r) { ?>
                                                                <tr class="meta-bordered"> 
                                                                    <td> <?php echo $r->ad_id; ?> </td> 
                                                                    <td> <?php echo $r->ad_username; ?> </td>
                                                                    <td> <?php echo $r->role_id; ?> </td> 
                                                                    <td> <img src="<?php echo base_url().$r->ad_photo; ?>" width="60" height="60" /> </td> 
                                                                    <td class="meta-action"><a href="<?php echo base_url(); ?>admin/edit_admin/<?php echo $r->ad_id; ?>"> <button class="btn btn-info"> <i class="fa fa-edit"> </i> edit </button> </a></td>
                                                                    <td class="meta-action"><a href="<?php echo base_url(); ?>admin/delete_admin/<?php echo $r->ad_id; ?>"> <button class="btn btn-info"> <i class="fa fa-close"></i> delete </button> </a></td>
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
