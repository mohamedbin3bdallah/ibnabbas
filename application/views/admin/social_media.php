

    <div class="page-content"> 
        <div class="content">  
            <div class="page-title"> <h3> social media data  </h3> </div>		
                <div class="row dashboard">
                    <div class="col-md-12">
                        <div style="background:#fff;padding: 10px;" class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title clearfix"> <h4 class="pull-left"> social media </h4>
                                </div>    
                            </div> <!-- end of panel-heading -->
                                <div class="panel-body">
                                    <?php if(isset($result) && !empty($result)) { echo $result ; } ?>
                                        <div class="table-responsive">
                                            <table class="table table-striped social">
                                                <?php if(isset($rows)){ foreach ($rows as $r){ $r->social_id; } } ?>
                    
                                                <?php echo form_open('marketing/add_social_links'); ?>
                                                <tr> 
                                                    <td style="width: 5%;" class="iconize"> <i class="fa fa-facebook-square fa-2x"></i></td> 
                                                    <td style="width: 20%;"> <strong>  Facebook </strong> </td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your facebook url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="facebook" class="form-control" value="<?php if(isset($r->facebook)){ echo $r->facebook;} ?>" /> </td>
                                                </tr>
                                                <tr> 
                                                    <td> <i class="fa fa-twitter-square fa-2x"></i></td> 
                                                    <td style="width: 20%;"><strong> Twitter </strong></td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Twitter url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="twitter" class="form-control" value="<?php if(isset($r->twitter)){ echo $r->twitter;} ?>" /> </td>
                                                </tr>
                                                <tr> 
                                                    <td> <i class="fa fa-youtube-square fa-2x"></i></td> 
                                                    <td> <strong> Youtube </strong></td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Youtube url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="youtube" class="form-control" value="<?php if(isset($r->youtube)){ echo $r->youtube;} ?>" /> </td>
                                                </tr>
                                                <tr> 
                                                    <td> <i class="fa fa-instagram fa-2x"></i></td> 
                                                    <td> <strong> Instagram </strong></td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Youtube url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="instagram" class="form-control" value="<?php if(isset($r->instagram)){ echo $r->instagram;} ?>" /> </td>
                                                </tr>
                                                <tr> 
                                                    <td> <i class="fa fa-google-plus-square fa-2x"></i></td> 
                                                    <td> <strong> Google Plus </strong></td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Google Plus url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="google" class="form-control" value="<?php if(isset($r->google)){ echo $r->google;} ?>" /> </td>
                                                </tr>
                                                <tr> 
                                                    <td> <i class="fa fa-soundcloud fa-2x"></i></td> 
                                                    <td> <strong> Sound Cloud </strong></td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Sound Cloud url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="Soundcloud" class="form-control" value="<?php if(isset($r->soundcloud)){ echo $r->soundcloud;} ?>" /> </td>
                                                </tr>
                                                <tr> 
                                                    <td> <i class="fa fa-linkedin-square fa-2x"></i></td> 
                                                    <td> <strong> Linked In </strong></td>
                                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Linked In url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                                    <td> <input type="text" name="Linkedin" class="form-control" value="<?php if(isset($r->linkedin)){ echo $r->linkedin;} ?>" /> </td>
                                                </tr>
                                            </table>
                                            <button class="btn btn-danger pull-right" id="add_item"><i class="fa fa-plus"> Add New Field </i> </button>
                                        </div> <!-- end of responsive -->
                                </div>
                            
                            <table class="table table-striped social_choice">
                                <tr> 
                                    <td colspan="2"> 
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" aria-haspopup="true">
                                                <button style="width: 50%;" class="btn btn-default"> <span id="social_title"> Choose social target </span> <span class="caret"></span> </button>
                                            </a> 
                                            <ul style="width: 50%;" class="dropdown-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-facebook-square fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> facebook </strong></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> twitter </strong></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-square fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> youtube </strong></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus-square fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> google </strong></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> linked in </strong></a></li>
                                                <li><a href="#"><i class="fa fa-soundcloud fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> sound cloud </strong></a></li>
                                                <li><a href="#"><i class="fa fa-flickr fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> flicker </strong></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> instagram </strong></a></li>
                                                <li><a href="#"><i class="fa fa-instagram fa-2x"> </i> <strong style="margin-left: 30px;margin-top: -10px;font-size: 16px;text-transform: capitalize;"> instagram </strong></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td style="width: 3%;"> <i class="fa fa-question-circle" title="type your Linked In url" data-toggle="tooltip" data-placement="left"> </i> </td>
                                    <td> <input type="text" name="Linkedin" class="form-control" value="<?php if(isset($r->linkedin)){ echo $r->linkedin;} ?>" /> </td>
                                </tr>
                            </table>
                            
                            
                                <div class="panel-footer ">
                                    <div class="" pull-right>
                                        <button type="submit" value="save" class="btn btn-success"><i class="fa fa-save"></i> save </button>
                                        <a href="<?php echo base_url();?>dashboard"><button type="button" value="cancel" class="btn btn-danger"><i class="fa fa-times"></i> cancel </button> </a>
                                    </div>
                                </div>
                                
                            </div> <!-- end of panel-body -->
                            <?php echo form_close(); ?>
                            
                            
                            
                        </div> <!-- end of panel-default -->
                    </div> <!-- end of col-md-12 -->
                </div> <!-- end of row -->
        </div> <!-- end of content -->
    </div> <!-- end of page-content -->
    

