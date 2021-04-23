<header>
    <div id="slides">
        <div class="slides-container">
		<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
			<img src="<?php echo base_url();?>upload/mobapp.jpg" alt="">
		<?php } else { ?>
        <?php
                foreach($slider as $sl){ ?>     
                <img src="<?php echo base_url();?>upload/<?php echo $sl->slider_url;?>" alt="">
            <?php } ?>
		<?php } ?>
        </div>
    <?php if(count($slider) > 1) { ?><nav class="slides-navigation"> <a href="#" class="next"><i class="fa fa-chevron-circle-right fa-2x"></i></a> <a href="#" class="prev"><i class="fa fa-chevron-circle-left fa-2x"></i></a> </nav> <?php } ?>
    <!--<div class="c-menu-logo">
      <div class="logo"><a href="#"><img src="imgs/logo.png"  alt="IBN ABBASS"></a></div>
      <div class="empty-menu">
        <div class="spacev"></div>
        <div class="bg-menu">
        
          <div class="bg-color-menu">
            <div class="container-menu"> <a class="toggleMenu" href="#"><?php echo $this->lang->line('menu'); ?></a>
              <ul class="nav">
                <li  class="test"> <a href="#home"><?php echo $this->lang->line('menu_home'); ?></a> </li>
                <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
                <li> <a href="#about"><?php echo $this->lang->line('menu_about'); ?></a> </li>
				<li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>                
				<li> <a href="#videoclips"><?php echo $this->lang->line('menu_video'); ?></a> </li>
                <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>                
				<li> <a href="#photo"><?php echo $this->lang->line('menu_photo'); ?></a> </li>				
                <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
				<li> <a href="#audio"><?php echo $this->lang->line('menu_audio'); ?></a> </li>				
                <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
                <li> <a href="#events"><?php echo $this->lang->line('menu_messages'); ?></a> </li>
                <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
                <li> <a href="#news"><?php echo $this->lang->line('menu_news'); ?></a> </li>
                <!-- <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
                <li> <a href="#store"><?php echo $this->lang->line('menu_store'); ?></a> </li> -->
                <!--<li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
                <li> <a href="#contact"><?php echo $this->lang->line('menu_contact'); ?></a> </li>-->
                <!-- <li>
                  <form method="post" action="" id="search">
                    <input name="" type="text" size="40" placeholder="Search...">
                  </form>
                </li> -->
              <!--</ul>
            </div>
          </div>
        </div>
      </div>
    </div>-->
	<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
	<nav class="social-right">        
		<!--<a class="toggleMenu" href="#"><i class="glyphicon glyphicon-list"></i></a><br><br>-->
		<a class="toggleMenu" href="#"><img src="<?php echo base_url();?>upload/VisualEditor_-_Icon_-_Menu.svg.png" width="21px"></a><br><br>
		<ul class="nav">
            <li> <a href="#home"><?php echo $this->lang->line('menu_home'); ?></a> </li>
            <li> <a href="#about"><?php echo $this->lang->line('menu_about'); ?></a> </li>
			<li> <a href="#videoclips"><?php echo $this->lang->line('menu_video'); ?></a> </li>
			<li> <a href="#photo"><?php echo $this->lang->line('menu_photo'); ?></a> </li>				
			<li> <a href="#audio"><?php echo $this->lang->line('menu_audio'); ?></a> </li>				
            <li> <a href="#events"><?php echo $this->lang->line('menu_messages'); ?></a> </li>
            <li> <a href="#news"><?php echo $this->lang->line('menu_news'); ?></a> </li>
            <!-- <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
            <li> <a href="#store"><?php //echo $this->lang->line('menu_store'); ?></a> </li> -->
            <li> <a href="#contact"><?php echo $this->lang->line('menu_contact'); ?></a> </li>
            <!-- <li>
				<form method="post" action="" id="search">
					<input name="" type="text" size="40" placeholder="Search...">
                </form>
            </li> -->
        </ul>
	</nav>	
	<?php } else { ?>
	<nav class="social-right">
		<ul>
            <li  class="test"> <a href="#home"><?php echo $this->lang->line('menu_home'); ?></a> </li>
            <li> <a href="#about"><?php echo $this->lang->line('menu_about'); ?></a> </li>
			<li> <a href="#videoclips"><?php echo $this->lang->line('menu_video'); ?></a> </li>
			<li> <a href="#photo"><?php echo $this->lang->line('menu_photo'); ?></a> </li>				
			<li> <a href="#audio"><?php echo $this->lang->line('menu_audio'); ?></a> </li>				
            <li> <a href="#events"><?php echo $this->lang->line('menu_messages'); ?></a> </li>
            <li> <a href="#news"><?php echo $this->lang->line('menu_news'); ?></a> </li>
            <!-- <li class="seperator"><img src="imgs/seperator.png" width="2" height="33"></li>
            <li> <a href="#store"><?php //echo $this->lang->line('menu_store'); ?></a> </li> -->
            <li> <a href="#contact"><?php echo $this->lang->line('menu_contact'); ?></a> </li>
            <!-- <li>
				<form method="post" action="" id="search">
					<input name="" type="text" size="40" placeholder="Search...">
                </form>
            </li> -->
        </ul>
	</nav>
	<?php } ?>
	
    <nav class="social">
        <ul>
            <?php foreach ($social as $co){ $co->social_id; }?>
            <li>
                <?php if($this->session->userdata('lang') == 'english' || $this->session->userdata('lang') == NULL){ ?> 
                    <a href="<?php echo base_url();?>home/home_page/change/arabic"><i>ع</i><!-- <i class="fa fa-language"></i>--></a>  <?php } ?>
                <?php if($this->session->userdata('lang') == 'arabic'  ){ ?>  
                    <a href="<?php echo base_url();?>home/home_page/change/english"><i>E</i><!--  <i class="fa fa-language"></i>--></a>   <?php } ?>
            </li>
            <!-- <li><a href="" data-toggle="modal" data-target="#basicModal">Login <i class="fa fa-user "></i></a></li> -->
            <li><a href="<?php echo $co->twitter; ?>" target="_blank"><!--Twitter--><i class="fa fa-twitter  "></i></a></li>
            <li><a href="<?php echo $co->facebook; ?>" target="_blank"><!--Facebook--><i class="fa fa-facebook "></i></a></li>
            <li><a href="<?php echo $co->instagram; ?>" target="_blank"><!--Instgram--><i class="fa fa-instagram "></i></a></li>
            <li><a href="<?php echo $co->youtube; ?>" target="_blank"><!--Youtube--><i class="fa fa-youtube "></i></a></li>
            <li><a href="<?php echo $co->google; ?>" target="_blank"><!--Google+--><i class="fa fa fa-google-plus "></i></a></li>
			<li><a href="<?php echo $co->linkedin; ?>" target="_blank"><!--LinkedIn--><i class="fa fa fa-linkedin "></i></a></li>
			<li><a href="<?php echo $co->soundcloud; ?>" target="_blank"><!--soundcloud--><i class="fa fa fa-soundcloud "></i></a></li>
        </ul>
    </nav>
	
    <!-- <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog-lg">
        <div class="modal-body">
          <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 class="text-center">My Account</h3>
                </div>
                <div class="modal-body">
                  <div>
                    <ul class="nav nav-tabs newnav" role="tablist" id="myTab">
                      <li  class="active"><a href="#signin"   data-toggle="tab"> Sign IN </a></li>
                      <li ><a href="#signup"  data-toggle="tab">Sign Up</a></li>
                    </ul>
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="signin">
                        <div class="form-group" style="margin-top:10px;">
                          <input type="password" class="form-control input" placeholder="type your password">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control input" placeholder="type your password">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-default btn btn-block">ENTER</button>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="signup">
                        <div class="form-group" style="margin-top:10px;">
                          <input type="password" class="form-control input" placeholder="type your password">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control input" placeholder="type your password">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-default btn btn-block">ENTER</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="welcome">
      <div class="title5" id="video">
            <?php
                // foreach($slider as $sl){ }?>     
                <?php // echo $sl->slider_desc;?>
            <?php //echo $this->lang->line('homepage'); ?>    
      </div>
    </div> -->
  </div>
  <div  class="blacksection  module content">	
    <!-- <div id="about" class="c-vedio ">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div id="blueimp-video-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
          <div class="slides"></div>
          <h3 class="title"></h3>
          <a class="prev">‹</a> <a class="next">›</a> <a class="play-pause"></a> </div>
      </div>
      <div   class="col-md-4"></div>
    </div> -->
    <div id="about" class="container empty">
        <div   class="col-md-12 title1" ><?php echo $this->lang->line('menu_about'); ?></div>
            <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 my-about"> 
              <?php
                foreach ($rows as $r) { 
                    
                        if ( $r->post_target == '82' ){
                            if($this->session->userdata('lang') == 'english' || $this->session->userdata('lang') == NULL || $this->session->userdata('lang') == "" ){ ?><div style="line-height: 200%;"><?php echo $r->post_desc; ?></div><?php }
                            if($this->session->userdata('lang') == 'arabic'){ ?><div dir="rtl" style="line-height: 200%;"><?php echo $r->post_desc_ar; ?></div><?php }
                        }
                    }
              ?>
            </div>
    </div>
	
	<div  class="blacksection2  module content">	
	<div id="videoclips" class="container empty">
	<div   class="col-md-12 title1" ><?php echo $this->lang->line('menu_video'); ?></div>
		 <?php foreach ($videos as $vid){ $target = str_replace('https://www.youtube.com/watch?v=', '', $vid->video_url); ?>
			 <div class="col-md-4">
				<div class="embed-responsive embed-responsive-4by3">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $target; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		 <?php } ?> 
	</div>
  </div>
  </div>
</header>


