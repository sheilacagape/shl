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
   }
 
</style>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fancybox/jquery.fancybox.css');?>">
<script async defer src="<?= base_url('assets/fancybox/jquery.fancybox.js');?>"></script>



 <div class="row col-md-12">
  
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
  <h4 class="text-center">Regional Standards and Testing Laboratories</h4>
  <h4 class="text-center">Shelf life Evaluation Laboratory</h4>
  <hr>
  <h4 class="text-center">Score Sheet - Triangle Test</h4>
  <hr>
    
 </div>


 <div class="row col-md-12">
  
  <div class="col-md-12 sidetripDetails"> 
    <table class="table">
      <tr>
        <td><strong>Sample Code: </strong></td>
        <td><em><?php echo $oneForm[0]->sample_code; ?></em> </td>
        <td><strong>Date: </strong> </td>
        <td><em><?php if(isset($answer[0])){ echo $answer[0]->date_answered;} else { echo date("m/d/Y") ;} ?></em> </td>
      </tr>
      
      <tr>
        <td><strong>Name: </strong> </td>
        <td><em><?php echo $panelistdata[0]->lastname.", ".$panelistdata[0]->firstname; ?></em> </td>
        <td><strong>Panelist No.: </strong> </td>
        <td> </td>
      </tr>
      
    </table>

    <h5>Instruction: Taste the samples from left to right. Two samples are alike; one is different. Select or guess the odd/different sample and indicate by placing a check mark “✔” next to the code of the odd sample.</h5>
  </div>
  
  <div class="col-md-12 sidetripDetails"> 
    
    <table class="table">
      <thead>
        <th></th>
        <th>Sample Code</th>
        <th>Odd Sample</th>
        <th></th>
      </thead>
      <tbody>
        <?php 
          if(isset($oneFormSamples)){
            foreach ($oneFormSamples as $key) {
        ?>
        
        <tr>
          <td></td>
          <td><p class="samplecodedesc" id="<?php echo('samplecodedesc'.$key->triad_code_id); ?>"><?php echo $key->triad_code; ?> 
            
          </p>
          </td>
          <td>
            <?php  
              if(isset($answer[0])){
                if ($key->triad_code_id == $answer[0]->tt_sample_odd_id) {
                  ?>
                  <div class="form-check">
                    <input disabled checked name="answer" class="form-check-input answer" type="checkbox"  value="<?php echo($key->triad_code_id); ?>">
                  </div>
                <?php } else {
                  ?>
                  <div class="form-check">
                    <input disabled name="answer" class="form-check-input answer" type="checkbox"  value="<?php echo($key->triad_code_id); ?>">
                  </div>
                <?php
                }
              }
            ?>
            
            <?php  
              if(isset($answer[0])==FALSE){
                ?>
                <div class="form-check">
                  <input name="answer" class="form-check-input answer" type="checkbox"  value="<?php echo($key->triad_code_id); ?>">
                  
                </div>
            <?php }
            ?>
          </td>
          <td></td>
        </tr>

        <?php
            }
          }

         ?>
        
      </tbody>
      
    </table>

      
    <input type="hidden" id="pdt_id" name="ttid" value="<?php echo $oneForm[0]->id; ?>">
    <input type="hidden" id="ft_id" name="ftid" value="<?php echo $oneForm[0]->form_type_id; ?>">
    
    <?php  
      if(isset($answer[0])){
        ?>
        <div class="form-group">
            <label for="comments">Panelist's Comments/Remarks:</label>
            <textarea disabled class="form-control" id="comments" name="comments" rows="3">
              <?php echo $answer[0]->comments; ?>
            </textarea>
          </div>
       
        <?php }
    ?>
    
    <?php  
      if(isset($answer[0])==FALSE){
        ?>
      <div class="form-group">
          <label for="comments">Panelist's Comments/Remarks:</label>
          <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Write your comments here..."></textarea>
        </div>
        <button type="button" class="btn btn-primary submit" >Submit</button>   
    <?php }
    ?>

    <br>

    <h5 style="text-align: center;">-----------------------------------------------------------------------For SHL analyst only-----------------------------------------------------------------------</h5>

    <br>

    <div>
      <table class="table">
        <tr>
          <td style="text-align: left;">Panelist's Answer: ____ Correct ____ Incorrect </td>
          <td style="text-align: right;">Checked by/Date: ________________________________</td>
        </tr>
      </table>
      
    </div>
    
    <br>
    <h5>Page 1 of 1 </h5> 
    
    <h5 style="text-align: right;">STM-023-F2<br>Revision 0<br>Effectivity Date: 16 March 2020</h5> 
    
  </div>

 </div>


 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">
  // the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

  $(".submit").on("click", function(){
       var ttsampleid = $('.answer:checked').val();
       var ttid = $("input[name=ttid]").val();
       var comments = $("textarea[name=comments]").val();
       var ftid = $("input[name=ftid]").val();
      var formdata = new Array(ttid,ttsampleid,comments,ftid);
      console.log(formdata);
      $.ajax({
      url: 'http://'+window.location.host+'/shl/shlform/submitAnswer',
      type: "POST",
      data: {"data":formdata},
      success: function(data){
        
        $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/getOneFormSheet',{id:data});
        var fade_in = function() {
            $("#myFormModal").modal('hide');
            $('.alerttt').text("Successfully submitted evaluation!");
            $('.modal-backdrop').remove(); // removes the grey overlay.
            $('body').removeClass('modal-open');
            $(".alerttt").show();
          }

          var fade_out = function() {
            $(".alerttt").fadeOut().empty();
          }
          setTimeout(fade_in,500);
          setTimeout(fade_out, 3000);
      },
        error: function(){
          
          var fade_in = function() {
            $('.alerttt').text( "Unable to submit evaluation." );
            $(".alerttt").show();
          }

          var fade_out = function() {
            $(".alerttt").fadeOut().empty();
          }
          setTimeout(fade_in,500);
          setTimeout(fade_out, 3000);
      }
        });
    });
 </script>