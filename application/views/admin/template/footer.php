

</div> <!-- end of page container -->
<!-- END CONTAINER --> 
<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="<?php echo base_url(); ?>backend/assets/js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>backend/assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>backend/assets/js/breakpoints.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>backend/assets/js/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend/assets/js/core.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo base_url() ; ?>backend/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url() ; ?>backend/common.js" type="text/javascript" > </script>
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
    </script>
    
    
    
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
        $("#message").text(data);
        alert('your image is uploaded successfully');
        
        // var pic = data['name'];
                    $('#image_preview img').on('click',function(){
                    $('button.close').trigger('click');
                        var src = '<?php echo base_url(); ?>upload/'+ pic;
                        $('#image_btn').find('img').attr('src',src);
                    });
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
        
      
    });
    

</script>
<!-- END CORE TEMPLATE JS --> 
</body>
</html>