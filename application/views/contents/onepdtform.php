<style type="text/css">
 
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }



.contain:hover .logo {
  opacity: 0.7;
}

.contain:hover .middlee {
  opacity: 1;
}

.textt {
  background-color: #eae7e6;
  color: black;
  font-size: 16px;
  padding: 13px 20px;
  border-radius: 50px;


}

 .color:hover{
    color:blue;

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fancybox/jquery.fancybox.css');?>">
<script async defer src="<?= base_url('assets/fancybox/jquery.fancybox.js');?>"></script>



 <div class="row col-md-12">
  
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
  <h4 class="text-center">Regional Standards and Testing Laboratories</h4>
  <h4 class="text-center">SHELF-LIFE EVALUATION LABORATORY</h4>
  <hr>
  <h4 class="text-center">Score sheet for Sensory Evaluation</h4>
  <h4 class="text-center">(Paired-Difference Test)</h4> 
  <hr>
    <div id="faq" role="tablist" aria-multiselectable="true">

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="questionOne">
          <h5 class="panel-title">
          <a id="collapsethis" data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
          See Form Details..
          </a>
          
          </h5>
        </div>
        <div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
        
        <div class="panel-body" id="showformdetails" style="display: block;">
          <button id="editformdata" type="button" style="float: right; " class="btn btn-info btn-xs">Edit Form Details</button>
          <strong>Request Number: </strong><em><?php echo $oneForm[0]->test_request_no; ?></em>
          <br><strong>Product Name: </strong><em><?php echo $oneForm[0]->product; ?></em>
          
          <br><strong>Sample Description Code: </strong><em><?php echo $oneForm[0]->sample_code; ?></em>
          
        </div>

        <div class="panel-body" id="editformdetails" style="display: none;">
          
          <form method="POST">
              
              <div class="form-group">
                <label>Product Name</label>
                <input class="form-control" name="usamplename" placeholder="Product Name" type="text" value="<?php echo $oneForm[0]->product; ?>">
              </div>
              
              
              <div class="form-group">
                <label>Request Number</label>
                <input class="form-control" name="utrfno" placeholder="R10-2022-SHL-" type="text" value="<?php echo $oneForm[0]->test_request_no; ?>">
              </div>

              <div class="form-group">
                <label>Sample Description Code</label>
                <input class="form-control" name="utrfcode" placeholder="SHL-" type="text" value="<?php echo $oneForm[0]->sample_code; ?>">
              </div>
             
            
              <div style="text-align:  right;">
                <button type="button" id="cancelupdateform" class="btn btn-default">Close</button>
                <button type="button" id="updateform" class="btn btn-primary save">Update</button>
              </div>
            </form>
          
        </div>
        </div>
      </div>

      </div>
 </div>



 <div class="row col-md-12">
  
  <div class="col-md-12 sidetripDetails"> 
    <table class="table">
      <tr>
        <td>Name:</td>
        <td></td>
        <td>Product: </td>
        <td><?php echo $oneForm[0]->product; ?></td>
        
      </tr>
      
      <tr>
        <td>Panelist No.:</td>
        <td></td>
        <td>Date: </td>
        <td></td>
      </tr>
      
    </table>

    <h5>Instruction:</h5>
    <h5>You are given a pair of coded samples. Please place a check (√) mark under the appropriate row and  write down any comments.</h5>
  </div>
  
  <div class="col-md-12 sidetripDetails"> 
    
    <table class="table table-bordered">
      <tr>
            <th rowspan="2">Sample Code</th>
            <th colspan="5" rowspan="1">Sample Preffered</th>
            
        </tr>
        <tr>
          <?php 
            if (isset($formAttr)) {
              foreach ($formAttr as $key) {
                ?>
                <th rowspan="1"><p class="attrdesc" id="<?php echo('attrdesc'.$key->pdattr_id); ?>"><?php echo $key->attr_desc; ?> <span data-toggle="tooltip" data-placement="top" title="Edit Attribute" class="glyphicon glyphicon-pencil color editattr" aria-hidden="true" id="<?php echo $key->pdattr_id; ?>" style="cursor: pointer; "></p>
                  <form method="POST" style="display: none;" class="editattrdesc" id="<?php echo('editattrdesc'.$key->pdattr_id); ?>">
                                <br>
                                <div class="input-group">
                    <input type="text" class="form-control" name="<?php echo('attrid'.$key->pdattr_id); ?>" placeholder="Attribute Description" value="<?php echo($key->attr_desc); ?>">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default cancelattredit" id="<?php echo($key->pdattr_id); ?>">
                        <span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span>
                      </button>
                      <button type="button" class="btn btn-primary saveattredit" id="<?php echo($key->pdattr_id); ?>">
                        <span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span>
                      </button>
                    </div>
                  </div>
                              </form>
                           </th>
                <?php
              }
            }
          ?>

            
            
        </tr>
            
      <tbody>
        <?php 
          if(isset($oneFormSamples)){
            foreach ($oneFormSamples as $key) {
        ?>
        
        <tr>
          
          <td><p class="samplecodedesc" id="<?php echo('samplecodedesc'.$key->pdt_sample_id); ?>"><?php echo $key->sample_code; ?> 
            <span data-toggle="tooltip" data-placement="top" title="Edit Sample Code" class="glyphicon glyphicon-pencil color editsample" aria-hidden="true" id="<?php echo($key->pdt_sample_id); ?>" style="cursor: pointer; "></span> &nbsp;
          </p>

                          <form method="POST" style="display: none;" class="editsampledesc" id="<?php echo('editsampledesc'.$key->pdt_sample_id); ?>">
                            <br>
                            <input type="hidden" id="user_id" name="userid" value="<?php echo $oneForm[0]->user_id; ?>">
                            <input type="hidden" id="tt_id" name="ttid" value="<?php echo $oneForm[0]->id; ?>">
                            <input type="hidden" id="ft_id" name="ftid" value="<?php echo $oneForm[0]->form_type_id; ?>">
                            <div class="input-group">
                <input type="text" class="form-control" name="<?php echo('samplecode'.$key->pdt_sample_id); ?>" placeholder="Sample Code" value="<?php echo($key->sample_code); ?>">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default cancelsamplecodeedit" id="<?php echo($key->pdt_sample_id); ?>"><span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
                               <button type="button" class="btn btn-primary savesamplecodeedit" id="<?php echo($key->pdt_sample_id); ?>"><span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
                </div>
              </div>
                          </form>
          </td>
          <td>__________</td>
          <td>__________</td>
          <td>__________</td>
          <td>__________</td>
          <td>__________</td>
        </tr>

        <?php
            }
          }

         ?>
        
      </tbody>
      
      
    </table>

    <h5>Comments: </h5>
    <br>

    
    <h5 style="text-align: right;">STM-004 F1<br>Revision 0</h5>  
    
  </div>

 </div>

 
 


 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
  });

  $('.editattr').on('click',function(){
    var id = $(this).attr('id');

    $('#editattrdesc'+id).show();
    $('#attrdesc'+id).hide();
  });

  $('.cancelattredit').on('click',function(){
    var id = $(this).attr('id');

    $('#editattrdesc'+id).hide();
    $('#attrdesc'+id).show();
  });

  $('.saveattredit').on('click',function(){
    var id = $(this).attr('id');

    $('#editattrdesc'+id).hide();
    $('#attrdesc'+id).show();

    var newattrdesc = $("input[name=attrid"+id).val();
    var userid = $("input[name=userid").val();
    var ttid = $("input[name=ttid").val();
    var ftid = $("input[name=ftid").val();
      var sampledetails = new Array(id,ttid,ftid,newattrdesc,userid);
      
    $.ajax({
      url: "http://"+window.location.host+"/shl/shlform/updateAttrDesc",
      type: "POST",
      data: {"data":sampledetails},
      success: function(data){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Successfully updated attribute description." );
          $(".alert").show();
          $('.modal-backdrop').remove(); // removes the grey overlay.
        }

        var fade_out = function() {
          $(".alert").fadeOut().empty();
          // $(".alert").show();
        }
        setTimeout(fade_in,500);
        setTimeout(fade_out, 3000);
      },
      error: function(){
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Unable to update attribute description." );
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


$('.editsample').on('click',function(){
    var id = $(this).attr('id');

    $('#editsampledesc'+id).show();
    $('#samplecodedesc'+id).hide();
  });

  $('.cancelsamplecodeedit').on('click',function(){
    var id = $(this).attr('id');

    $('#editsampledesc'+id).hide();
    $('#samplecodedesc'+id).show();
  });

  
  $('.savesamplecodeedit').on('click',function(){
    var id = $(this).attr('id');

    $('#editsampledesc'+id).hide();
    $('#samplecodedesc'+id).show();

    var newsamplecode = $("input[name=samplecode"+id).val();
    var userid = $("input[name=userid").val();
    var ttid = $("input[name=ttid").val();
    var ftid = $("input[name=ftid").val();
      var sampledetails = new Array(id,ttid,ftid,newsamplecode,userid);
      
    $.ajax({
      url: "http://"+window.location.host+"/shl/shlform/updateSample",
      type: "POST",
      data: {"data":sampledetails},
      success: function(data){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Successfully updated sample code." );
          $(".alert").show();
          $('.modal-backdrop').remove(); // removes the grey overlay.
        }

        var fade_out = function() {
          $(".alert").fadeOut().empty();
          // $(".alert").show();
        }
        setTimeout(fade_in,500);
        setTimeout(fade_out, 3000);
      },
      error: function(){
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Unable to update sample code." );
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

  

  $('#editformdata').on('click',function(){
    $("#showformdetails").hide();
    $("#editformdetails").show();
    
  });

  $('#cancelupdateform').on('click',function(){
    $("#showformdetails").show();
    $("#editformdetails").hide();
    
  });


  $('#updateform').on('click',function(){
    var ttid = $("input[name=ttid").val();
    var ftid = $("input[name=ftid").val();
    var name = $("input[name=usamplename]").val();
    
    var trfno = $("input[name=utrfno]").val();
    var trfcode = $("input[name=utrfcode]").val();
    
    var formdata = new Array(ttid,ftid,name,trfno,trfcode);
    console.log(formdata);
    $("#collapsethis").click();
    $("#showformdetails").show();
    $("#editformdetails").hide();

    $.ajax({
      url: "http://"+window.location.host+"/shl/shlform/updateFormDetails",
      type: "POST",
      data: {"data":formdata},
      success: function(data){
        $("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Successfully updated form details." );
          $(".alert").show();
          $('.modal-backdrop').remove(); // removes the grey overlay.
        }

        var fade_out = function() {
          $(".alert").fadeOut().empty();
          // $(".alert").show();
        }
        setTimeout(fade_in,500);
        setTimeout(fade_out, 3000);
      },
      error: function(){
        
        var fade_in = function() {
          // $(".alert").fadeOut().empty();
          $('.alert').text( "Unable to update form details." );
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


 </script>