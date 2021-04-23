
<html>
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
<link href="<?php echo base_url();?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    <img src="<?php echo base_url();?>images/noimage.png" alt="" width="150" height="150" />
</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"> image manager </h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-5"><a href="parent" data-toggle="tooltip" title="button parent" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a> 
                <a href="refresh" data-toggle="tooltip" title="refresh" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>
                <form id="uploadimage" action="" method="post" enctype="multipart/form-data"> 
                  <input style="display:none;" type="file" name="file" id="file" required class="btn btn-info" />
                  <button type="button" data-toggle="tooltip" title="button upload" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>
                  <button type="button" data-toggle="tooltip" title="button folder" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>
                  <button type="button" data-toggle="tooltip" title="button delete" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                  <button type="submit" class="btn btn-info" id="submitted"> <i class="fa fa-upload"> </i> upload </button>
                </form>
                </div>
                <div class="col-sm-7">
                  <div class="input-group">
                    <input type="text" name="search" value="filter name" placeholder="search" class="form-control">
                    <span class="input-group-btn">
                    <button type="button" data-toggle="tooltip" title="button search" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </span></div>
                </div>
              </div>
              <hr />

              <div class="row">
                  <div class="col-md-6">
                      <div id="image_preview"> <a href="#"> <img id="previewing" src="images/noimage.png" /> </a></div> 
                  </div>
                  <div class="col-md-6">
                      <div id="message"></div>
                  </div>
              </div>
            </div>
        <div class="modal-footer"> </div>
    </div>
  </div>
</div>


    

    

<script src="<?php echo base_url();?>js/jquery-2.1.1.min.js" type="text/javascript"> </script>
<script src="<?php echo base_url();?>js/bootstrap.min.js" type="text/javascript"> </script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#button-upload').on('click',function(e) {
            $('#file').trigger('click');
            e.preventDefault();
        });
        $('#button-folder').on('click',function(e){
           e.preventDefault();
        });
        
        $("#uploadimage").on('submit',(function(e) {
        e.preventDefault();
        $("#message").empty();
        $('#loading').show();
        $.ajax({
        url: "<?php echo base_url(); ?>ajax_php_file/ajax_upload", // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,        // To send DOMDocument or non processed data file it is set to false
        success: function(data)   // A function to be called if request succeeds
        {
        $('#loading').hide();
        $("#message").html(data);
        }
        });
        }));

        // Function to preview image after validation
        $(function() {
        $("#file").change(function() {
        $("#message").empty(); // To remove the previous error message
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
        {
        $('#previewing').attr('src','noimage.png');
        $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
        return false;
        }
        else
        {
        var reader = new FileReader();
        reader.onload = imageIsLoaded;
        reader.readAsDataURL(this.files[0]);
        }
        });
        });
        function imageIsLoaded(e) {
        $("#file").css("color","green");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
        $('#previewing').attr('width', '250px');
        $('#previewing').attr('height', '230px');
        };
        
        $('#image_preview').on('click',function(){
           $('.modal').hide('slow');
           var src =  $_FILES['file']['name']; 
           $('button').find('img').attr('src',src);
        });
        
    });
    

</script>
</body>
</html>