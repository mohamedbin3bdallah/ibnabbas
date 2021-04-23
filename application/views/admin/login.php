<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">

      <title> new template design </title>

      <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" >
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row logon">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title"> <h4><span class="fa fa-bell"> </span> login area </h4> </div>
                        </div> <!-- end of panel-heading -->
                        <div class="panel-body">
                            <?php echo validation_errors('<p class="bg-danger">' ,'</p>'); ?>
                            <?php echo form_open('admin/validate_credential'); ?>
                            <div class="form-group">
                                <label> usernames : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i> </div>
                                        <input type="text" name="username" class="form-control" />
                                    </div>
                                        <label> password </label>
                                    <div class="input-group">  
                                        <div class="input-group-addon"><i class="fa fa-lock"></i> </div>
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                        <button class="btn btn-info"> <span class="fa fa-sign-in"> </span> login </button>
                            </div>
                        </div> <!-- end of panel-body -->
                        <div class="panel-footer">
                            <input type="checkbox" class="pull-left"  name="remember" />  remeber me
                            <a href="#" class="pull-right"> forget password </a> 
                        </div>
                            <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    
    
    


    <script src="<?php echo base_url();?>js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>js/summernote.js"></script>
    </body>
</html>