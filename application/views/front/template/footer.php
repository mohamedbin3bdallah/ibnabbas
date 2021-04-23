<!--end-contact-section-->
<footer class="footer ">
  <div class="" style="width:30%; float:left;">
    <div class="form-group" style="margin-top:9px; margin-left:5%; ">
        <!-- <?php echo form_open(); ?>
            <label for="contact-email">Newsletter : </label>
            <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
            <button type="submit" class="button_gray" id="subscribe">SEND</button>
        <?php echo form_close(); ?> -->
    </div>
  </div>
  <div class="" style="width:70%; float:right;">
    <div class="gray">
        <div class="triangle"></div>
        <div style="padding-left: 50%; padding-top: 15px; color: #fff;">Powered By: &reg; <a href="http://www.arise-mpe.com/" target="_blank" style="color: #0F72B8">ARISE</a><a href="http://www.arise-mpe.com/" target="_blank" style="color: #E6007E"> MPE</a></div>
    </div>
  </div>
</footer>
<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script> 
<script src="<?php echo base_url(); ?>js/owl.carousel.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
			});
			</script>
<script>
        $(document).ready(function() {
          $("#owl-demo").owlCarousel({
          navigation :false,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true,
          autoPlay:true
          });
          
          $("#owl-demo2").owlCarousel({
          navigation :true,
          pagination:false,
          navigationText: [
            '<div class="control-box"> <a data-slide="prev" href="event/#myCarousel" class="carousel-control left">‹',
            '</a> <a data-slide="next" href="event/#myCarousel" class="carousel-control right">›</a> </div>'
            ],
          slideSpeed : 300,
          items : 4,
          paginationSpeed : 400,
          autoPlay:true
          });
		  
		  $("#owl-demo3").owlCarousel({
          navigation :true,
          pagination:false,
          navigationText: [
            '<div class="control-box"> <a data-slide="prev" href="event/#myCarousel" class="carousel-control left">‹',
            '</a> <a data-slide="next" href="event/#myCarousel" class="carousel-control right">›</a> </div>'
            ],
          slideSpeed : 300,
		  items : 2,
          paginationSpeed : 400,
          autoPlay:true
          });
          
        });
        </script> 
<script src="<?php echo base_url(); ?>js/blueimp-helper.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script> 
<script>
        $(function() {
          $('#slides').superslides({
            hashchange: true,
            play: 2000,
          });
          $('#slides').on('mouseenter', function() {
            $(this).superslides('stop');
            console.log('Stopped')
          });
          $('#slides').on('mouseleave', function() {
            $(this).superslides('start');
            console.log('Started')
          });
        });
      </script> 

<!-- Responsive Tabs JS --> 
<script src="<?php echo base_url(); ?>js/jquery.responsiveTabs.js" type="text/javascript"></script> 
<script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [3,4],
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });
        });
    </script> 

<!-- start photo--> 
<script src="<?php echo base_url(); ?>js/gamma.js"></script> 
<script src="<?php echo base_url(); ?>js/wow.min.js"></script> 
<script type="text/javascript">           
                $(function() {
                    var GammaSettings = {
                           
                            viewport : [ {
                                width : 1200,
                                columns : 5
                            }, {
                                width : 900,
                                columns : 4
                            }, {
                                width : 500,
                                columns : 3
                            }, { 
                                width : 320,
                                columns : 2
                            }, { 
                                width : 0,
                                columns : 2
                            } ]
                    };
    
                    Gamma.init( GammaSettings, fncallback );
                    var page = 0,
                        items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']
    
                    function fncallback() {
    
                        $( '#loadmore' ).show().on( 'click', function() {
    
                            ++page;
                            var newitems = items[page-1]
                            if( page <= 1 ) {
                                
                                Gamma.add( $( newitems ) );
    
                            }
                            if( page === 1 ) {
    
                                $( this ).remove();
    
                            }
    
                        } );
    
                    }
    
                });
    
            </script> 
            
                
            <script>
                $(function () {
                    'use strict';

                    // Load demo images from flickr:
                    $.ajax({
                        // Flickr API is SSL only:
                        // https://code.flickr.net/2014/04/30/flickr-api-going-ssl-only-on-june-27th-2014/
                        url: 'https://api.flickr.com/services/rest/',
                        data: {
                            format: 'json',
                            method: 'flickr.interestingness.getList',
                            api_key: '7617adae70159d09ba78cfec73c13be3' // jshint ignore:line
                        },
                        dataType: 'jsonp',
                        jsonp: 'jsoncallback'
                    }).done(function (result) {
                        var carouselLinks = [],
                            linksContainer = $('#links'),
                            baseUrl;
                        // Add the demo images as links with thumbnails to the page:
                        $.each(result.photos.photo, function (index, photo) {
                            baseUrl = 'https://farm' + photo.farm + '.static.flickr.com/' +
                                photo.server + '/' + photo.id + '_' + photo.secret;
                            $('<a/>')
                                .append($('<img>').prop('src', baseUrl + '_s.jpg'))
                                .prop('href', baseUrl + '_b.jpg')
                                .prop('title', photo.title)
                                .attr('data-gallery', '')
                                .appendTo(linksContainer);
                            carouselLinks.push({
                                href: baseUrl + '_c.jpg',
                                title: photo.title
                            });
                        });
                        // Initialize the Gallery as image carousel:
                        blueimp.Gallery(carouselLinks, {
                            container: '#blueimp-image-carousel',
                            carousel: true
                        });
                    });
                 // Initialize the Gallery as video carousel:
                    /*blueimp.Gallery([
                        
                      <?php  foreach ($videos as $vid){
                        $target = str_replace('https://www.youtube.com/watch?v=', '', $vid->video_url);
                        echo  '{ youtube:'.$target.'},'; 
                        ?>
                      <?php } ?>  
                        
                        
                        
                        
                    ], {
                        container: '#blueimp-video-carousel',
                        carousel: true
                    });*/



                });
            </script>
<script src="<?php echo base_url(); ?>js/prettify.js"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>
