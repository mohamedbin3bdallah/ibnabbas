
<!--end-about-section-->
<section id="photo" class="section-orange module parallax parallax-2">
    <div class=" container">
        <div class="row">
            <div  style="height:150px;"></div>
            <div  class="col-md-12 title1"> <?php echo $this->lang->line('page_photo'); ?> </div>
        </div> <!-- end of row -->
        
        <div class="row">
            <ul class="gallery clearfix">
                <?php  foreach ($photos as $pic){ ?>
                    <div class="col-md-3">
                        <li>
                            <a href="<?php echo base_url(); ?>upload/gallery/<?php echo $pic->photo_url;?>" rel="prettyPhoto[gallery1]">
                            <div class="overlay-color"></div>
                            <div class="photo_wrapper">
                                <img src="<?php echo base_url(); ?>upload/gallery/<?php echo $pic->photo_url;?>"   alt="Nice building" />
                            </div>
                            </a>
                        </li>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </div> <!-- end of container -->
</section>

<section id="audio" class="section-black module content">
    <div class=" container">
        <div class="row">
            <div  style="height:150px;"></div>
            <div  class="col-md-12 title1"> <?php echo $this->lang->line('page_audio'); ?> </div>
        </div> <!-- end of row -->
        
        <div class="row">
            <ul class="gallery clearfix">
                <?php foreach ($audios as $audio){ ?>
                    <div class="col-md-3">
						<?php echo $audio->audio_url; ?>						
					</div>					
                <?php } ?>
            </ul>
        </div>
    </div> <!-- end of container -->
</section>

<!-- end-photo-section-->
<section id="events" class="section-black module content" >
    <div class=" container">
        <div class="row">
            <div style="height:150px;"></div>
            <div   class="col-md-12 title1"> <?php echo $this->lang->line('page_msg'); ?> </div>
            <div class="col-md-12 title2"> 
                <?php
                    foreach ($rows as $r) { $r->post_target; 
                        if ( $r->post_target == '83' &&  $r->post_cat == '5'  ){
                            if($this->session->userdata('lang') == 'english' || $this->session->userdata('lang') == NULL || $this->session->userdata('lang') == "" ){ echo $r->post_desc; }
                            if($this->session->userdata('lang') == 'arabic'){ echo $r->post_desc_ar; }
                                
                            }
                        }
                ?>
            </div>
            <div class="col-md-12">
                <div class="carousel slide" id="myCarousel">
                    <div id="owl-demo2" class="owl-carousel"> 
                        <?php  foreach ($quotes as $q) {  ?>
                            <li style="margin: 0px 10px;" class="item">
                                <div class="thumbnail">
                                  <div class="thumbdate"></div>
                                  <a href="<?php echo $q->quote_url; ?>" rel="prettyPhoto">
                                      <iframe width="260" height="210" src="https://www.youtube.com/embed/<?php echo str_replace('https://www.youtube.com/watch?v=', '', $q->quote_url);?>" frameborder="0" allowfullscreen></iframe>
                                  </a>
                                </div>
                                <div class="caption">
                                  <h4><?php echo $q->quote_title; ?></h4>
                                  <ul class="gallery clearfix"> </ul>
                                    <div class="fleft">
                                        <ul class="gallery clearfix">
                                            <li>
                                                <a class="btn btn-mini" href="<?php echo $q->quote_url;?>?rel=0" rel="prettyPhoto"> » <?php echo $this->lang->line('show_video'); ?>  </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </div>
                </div> <!-- end of owl-carousel slide -->
            </div>
        </div>
    </div>
</section>


<!--end-event-section-->
<section id="news" class="section-orange module parallax parallax-1">
    <div class=" container">
        <div class="row">
            <div style="height:150px;"></div>
            <div  class="col-md-12 title1"><?php echo $this->lang->line('page_news'); ?></div>
            <div class="col-md-12">
                <div id="owl-demo" class="owl-carousel">
                    <?php
                        foreach ($rows as $r) { 
                            if ( $r->post_target == '84' ){ ?>
                                <div class="items">
                                    <div class="col-md-1">
                                        <div class="ev1">
                                          <p class="da1"> <?php  echo date('F',strtotime($r->time_created)) ;  ?> </p>
                                          <p class="da2"> <?php  echo date('j',strtotime($r->time_created)) ;  ?> </p>
                                          <p class="da3"> <?php  echo date('Y',strtotime($r->time_created)) ;  ?> </p>
                                        </div>
                                    </div>
                                    <div class="new col-md-11">
                                        <div style="font-size: 26px; font-weight: bold;">
                                        <?php 
                                        if($this->session->userdata('lang') == 'english' || $this->session->userdata('lang') == NULL || $this->session->userdata('lang') == "" ){ echo $r->post_desc; }
                                        if($this->session->userdata('lang') == 'arabic'){ echo $r->post_desc_ar; } ?>
                                        </div>
                                    </div>
                                </div>
                    <?php   } } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-new-section-->


<!-- <section id="store" class="section-black ">
  <div class=" container">
    <div class="row">
      <div style="height:150px;"></div>
      <div   class="col-md-12 title1 "><?php /*echo $this->lang->line('page_store'); ?></div>
      <div class="col-md-12 title2"> 
                <?php
                    foreach ($rows as $r) { $r->post_target; 
                        if ( $r->post_target == '85' &&  $r->post_cat == '5'  ){
                            
                                if($this->session->userdata('lang') == 'english' || $this->session->userdata('lang') == NULL || $this->session->userdata('lang') == "" ){ echo $r->post_desc; }
                                if($this->session->userdata('lang') == 'arabic'){ echo $r->post_desc_ar; }
                        } } ?>
      </div>

                        <?php  //foreach ($rows as $r) { if ( $r->post_target == '85' && $r->post_cat == '6' ) { ?>
                            <div class="col-md-3">
                                <div class="view view-tenth"> <img src="<?php //echo base_url().$r->post_photo; ?>">
                                  <div class="mask">
                                    <h2><?php echo $r->post_title; ?></h2>
                                    <p><?php echo $r->post_desc; ?></p>
                                    <a href="<?php echo base_url(); ?>product/product_detail/<?php echo $r->post_id; ?>" target="_blank" class="info">
                                        <?php echo $this->lang->line('load_more'); ?></a> </div>
                                </div>
                                <div class="producttitle"><a href="<?php //echo base_url(); ?>product/product_detail/<?php echo $r->post_id; ?>"> Product ID</a> </div>
                                <div class="c-prices">
                                  <div class="price"><?php echo $r->post_id; ?></div>
                                  <div class="cart"><a href="<?php echo base_url(); ?>product/product_detail/<?php echo $r->post_id; ?>">
                                          <img src="<?php echo base_url(); ?>imgs/cart.png" alt="Add To Cart" ></a>
                                  </div>
                                </div>
                            </div>
                        <?php } } */?> 
      
    </div>
  </div>
</section> -->


<!--end-store-section-->
<section class="section-orange module parallax parallax-3">
    <div class=" container">
        <div class="row">
            <div style="height:150px;"></div>
            <div id="contact"  class="col-md-12 title1"><?php echo $this->lang->line('menu_contact'); ?></div>
            <div class="col-md-6 contact-form">
                <div class="yellow"><?php echo $this->lang->line('contact_msg'); ?></div>
                <?php echo validation_errors(); ?>
                <?php echo form_open('home_page/send_message'); ?>
                    <div class="form-group">
                      <label for="contact-name"><?php echo $this->lang->line('contact_name'); ?></label>
                      <input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
                    </div>
                    <div class="form-group">
                      <label for="contact-email"><?php echo $this->lang->line('contact_mail'); ?></label>
                      <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
                    </div>
                    <div class="form-group">
                      <label for="contact-message"><?php echo $this->lang->line('contact_message'); ?></label>
                      <textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn"><?php echo $this->lang->line('contact_send'); ?></button>
                <?php echo form_close(); ?>
            </div>
            <div class="col-md-6">
                <div class="mail"> <i class="fa fa-envelope-o yellow"></i> <a  href="mailto:info@ibnabbass.com ">info@ibnabbass.com</a></div>
            </div>
        </div>
    </div>
</section>