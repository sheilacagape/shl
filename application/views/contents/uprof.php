<div class="row col-md-12">
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
  <h4 class="text-center">Regional Office No. X</h4>
  <hr>  
  
  </div>
<div class="row col-md-12">
    <br>
    <div class="panel panel-primary">
      <div class="panel-heading">Maintenance Forms <button class="btn btn-default" id="addattach">Add New</button></div>    
      
      <!--<input type="file" id="newFeaturedPics" style="display: none;"><br>-->

      <div class="modal fade addAttach" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add New Form</h4>
            </div>
            <div class="modal-body">
                <form id="fupForm" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Description</label>
                  <input type="text" class="form-control" id="attachDesc" name="formDesc" placeholder="File Description" required />
              </div>
                <div class="form-group">
                  <label for="file">File</label>
                  <input type="file" id="newAttach" class="form-control" name="file" required />
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-default modal-btn-add" id="" name="" value="Add"> 
                  <input type="button" class="btn btn-primary modal-btn-close" value="Close" id="">
                </div>
                
                </form>
            </div>
            

          </div>
        </div>
      </div>

            
    


      <div class="panel-body">
      <?php if(isset($attach) && count($attach)>0){
        //var_dump($attach);
        foreach ($attach as $pic) {
          // echo $pic->photo_path;
          // echo "<br>";
      ?>  
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item"><a href="<?php echo $pic->file_path; ?>" target="_blank"><?php echo $pic->file_description; ?></a><a href="#" data-dismiss="alert" class="close deleteFile">&times;</a> </li>
          </ul>
          
        </div>

      <?php
        }
      } else {

        echo "<h4>No Attachments.</h4>";

      } ?>  
      </div>


      
    </div>  
  </div>

  <script type="text/javascript">

   // start code for edit tbl_farm_pictures

     $('#addattach').on('click',function(event){
      $('.addAttach').modal('show');
    });

      

    $( ".modal-btn-close" ).click(function() {
      $('.addAttach').modal('hide');
    });


  $( ".modal-btn-add" ).click(function() {
    event.preventDefault();
    
    var fileDesc = $("input[name=formDesc]").val();
    //console.log(fileDesc);
    var file_data = $('#newAttach').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('file', file_data);
      
      $( ".modal-btn-close" ).click();
      console.log(form_data);                             
      $.ajax({
          url: 'http://'+window.location.hostname+'/rstl_pm/upload.php', // <-- point to server-side PHP script 
          dataType: 'text',  // <-- what to expect back from the PHP script, if anything
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,                         
          type: 'post',
          success: function(pathlink){
            //console.log(fileDesc);
            saveToDbFeat(pathlink,fileDesc);
        
      },
      error: function(){
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Failed to upload attachment." );
          $(".alert").show();
        }

        var fade_out = function() {
          $(".alert").fadeOut().empty();
          // $(".alert").show();
        }
        setTimeout(fade_in,500);
        setTimeout(fade_out, 3000);
      }
       });
  });

  
  // File type validation
  $("#newAttach").change(function() {
      var file = this.files[0];
      var fileType = file.type;
      var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
      if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
          alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
          $("#newAttach").val('');
          return false;
      }
  });

  function saveToDbFeat(data,imgDe){
    // alert(data);
    $.ajax({
        type: 'GET',
        url: 'http://'+window.location.hostname+'/rstl_pm/main/addFormAttach?link='+data+'&desc='+imgDe,
        success: function(data) {
           alert(data);
          $("#reloadDiv").load("http://"+window.location.hostname+"/rstl_pm/main/getForms");
          
          var fade_in = function() {
          // $(".alert").fadeOut().empty();
          
          $('.alert').text( "Successfully added attachment." );
          $('.modal-backdrop').remove(); // removes the grey overlay.
          $('body').removeClass('modal-open');
          $(".alert").show();
          

        }

        var fade_out = function() {
          $(".alert").fadeOut().empty();
          
        }
        setTimeout(fade_in,500);
        setTimeout(fade_out, 3000);
        
      },
      error: function(){
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Failed to upload attachment." );
          $(".alert").show();
        }

        var fade_out = function() {
          $(".alert").fadeOut().empty();
          // $(".alert").show();
        }
        setTimeout(fade_in,500);
        setTimeout(fade_out, 3000);
      }
      });

  }

</script>