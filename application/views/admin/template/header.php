<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title> Admin Dashboard </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="<?php echo base_url(); ?>backend/assets/css/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/assets/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/assets/css/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/css/summernote.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>backend/css/main.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<body>
<div class="header navbar navbar-inverse "> 
    <div class="navbar-inner">
	<div class="header-seperation"> 
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		<li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
            </ul>
            <a href="index.html"><img src="<?php echo base_url(); ?>backend/assets/img/logo.png" class="logo" alt=""  data-src="<?php echo base_url(); ?>backend/assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>assets/img/logo2x.png" width="106" height="21"/></a>
            <ul class="nav pull-right notifcation-center">	
                <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
                <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
                <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>        
            </ul>
        </div>
      
        <div class="header-quick-nav" > 
            <div class="pull-left"> 
                <ul class="nav quick-section">
                  <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
                    <div class="iconset top-menu-toggle-dark"></div>
                    </a> 
                  </li>
                </ul>
                <ul class="nav quick-section">
                    <li class="quicklinks"> <a href="#" class="" >
                        <div class="iconset top-reload"></div>
                        </a> 
                    </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="quicklinks"> <a href="#" class="" >
                        <div class="iconset top-tiles"></div>
                        </a> 
                    </li>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on"> <span class="iconset top-search"></span></span>
                        <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
                    </li>
                </ul>
            </div>
            
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right"> 
		<div class="chat-toggler">	
                    <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
			<div class="user-details"> 
                            <div class="username">
				<span class="badge badge-important">3</span> 
				 media r <span class="bold">admin</span>									
                            </div>						
			</div> 
			<div class="iconset top-down-arrow"></div>
			</a>	
			<div class="profile-pic"> 
                            <img src="<?php echo base_url(); ?>backend/assets/img/profiles/avatar_small.jpg"  alt="" data-src="<?php echo base_url(); ?>backend/assets/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
			</div>       			
		</div>
		<ul class="nav quick-section ">
                    <li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
			<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="user-profile.html"> My Account</a>
                            </li>
                            <li><a href="calender.html">My Calendar</a>
                            </li>
                            <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn"><?php if(isset($num)){echo $num;} ?></span></a>
                            </li>
                            <li class="divider"></li>                
                            <li><a href="<?php echo base_url(); ?>admin/log_out"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
                    </li> 
		</ul> <!-- end of quick-section -->
            </div>
        </div> <!-- end of header- quick-nav -->
    </div> <!-- end of navbar-inner -->
</div> <!-- end of header navbar navbar-inverse -->