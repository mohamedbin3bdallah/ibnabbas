

<div class="page-container row-fluid">
    <div class="page-sidebar" id="main-menu"> 
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper"> 
            <div class="user-info-wrapper">	
                <div class="profile-wrapper">
                    <img src="<?php echo base_url(); ?>backend/assets/img/profiles/avatar.jpg"  alt="" data-src="<?php echo base_url(); ?>backend/assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>assets/img/profiles/avatar2x.jpg" width="69" height="69" />
                </div>
                <div class="user-info">
                    <div class="greeting">Welcome</div>
                    <div class="username">mediar <span class="semi-bold">admin</span></div>
                    <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
                </div>
            </div> 
            <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
            <ul>	
                <li class="start active "> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> 
                        <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>
                    <li class=""> <a href="email.html"> <i class="fa fa-envelope"></i> <span class="title">structure</span>  <span class=" badge badge-disable pull-right ">203</span></a> </li>      
                    <li class=""> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">structure</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="<?php echo base_url();?>page/list_page"> pages </a> </li>
                          <li > <a href="<?php echo base_url();?>category/list_cat"> categories </a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">posts</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                          <li > <a href="<?php echo base_url();?>post/list_post"> list all posts </a> </li>
                          <li > <a href="<?php echo base_url();?>post/add_post"> add new post </a> </li>
                        </ul>
                    </li> 
                    <li class=""> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">marketing</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                          <li > <a href="<?php echo base_url();?>marketing/social_media"> Social Media </a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="<?php echo base_url();?>gallery"> <i class="fa fa fa-adjust"></i> <span class="title">gallery</span> <span class="arrow "></span> </a> </li>
                    <li class=""> <a href="<?php echo base_url();?>comments/list_comments"> <i class="fa fa-flag"></i>  <span class="title">comments</span></a></li>  
                    <li class=""> <a href="<?php echo base_url();?>homepage/"> <i class="fa fa fa-adjust"></i> <span class="title">home page</span>  </a></li>
                    <li class=""> <a href="<?php echo base_url();?>homepage/list_quotes"> <i class="fa fa fa-adjust"></i> <span class="title">messages videos</span>  </a></li>

                 
                    
                    <li class=""> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">messages</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                          <li > <a href="<?php echo base_url();?>message/list_message"> list messages </a> </li>
                          <li > <a href="<?php echo base_url();?>message/compose_mail"> send message </a> </li>
                          <li > <a href="<?php echo base_url();?>message/setting"> message settings </a> </li>
                        </ul>
                    </li>
                    <li class=""> <a href="javascript:;"> <i class="fa fa fa-users"></i> <span class="title">users</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                          <li > <a href="<?php echo base_url();?>admin/list_admin"> all users </a> </li>
                          <li > <a href="<?php echo base_url();?>admin/add_admin"> add new user </a> </li>
                        </ul>
                    </li>
            </ul>
        </div> <!-- end of page-sidebar-wrapper scrollbar-dynamic -->
    </div> <!-- end of page-sidebar -->
 
    <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
            <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
            <div class="details-status"> </div>
            <a href="<?php echo base_url(); ?>admin/log_out"><i class="fa fa-power-off"></i></a>
        </div>
    </div>