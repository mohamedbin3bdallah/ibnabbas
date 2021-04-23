


    <!-- *************************************************************  begin of page contents ********************************************************** -->
    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> category lists </h3>  
                <a href="<?php echo base_url(); ?>category/add_cat"> <button class="btn btn-success pull-right"> <span class="glyphicon glyphicon-user"> </span> create new category </button> </a></div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title"> <h4> list all category </h4>
                                
                                    
                                </div>    
                            </div> <!-- end of panel-heading -->
                            <div class="panel-body">
                                                    <div class="tab-pane active" id="home">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <tr> <th> SN </th> <th> category name </th> <th> edit </th> <th> delete </th></tr>
                                                                <?php foreach ($rows as $r) { ?>
                                                                <tr class="meta-bordered"> 
                                                                    <td> <?php echo $r->cat_id; ?> </td> 
                                                                    <td> <?php echo $r->cat_name; ?> </td>
                                                                    <td class="meta-action"><a href="<?php echo base_url(); ?>category/edit_cat/<?php echo $r->cat_id; ?>"> <button class="btn btn-info"> <i class="fa fa-edit"> </i> edit </button> </a></td>
                                                                    <td class="meta-action"><a href="<?php echo base_url(); ?>category/delete_cat/<?php echo $r->cat_id; ?>"> <button class="btn btn-info"> <i class="fa fa-close"></i> delete </button> </a></td>
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
