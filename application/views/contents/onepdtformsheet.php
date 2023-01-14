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
 	<h4 class="text-center">ACCELERATED SHELF-LIFE EVALUATION LABORATORY</h4>
 	<hr>
 	<h4 class="text-center">Score sheet for Sensory Evaluation</h4>
 	<h4 class="text-center">(Paired-Difference Test)</h4>
 	<hr>
 		
 </div>


 <div class="row col-md-12">
 	
 	<div class="col-md-12 sidetripDetails"> 
 		<table class="table">
 			<tr>
 				<td><strong>Name: </strong>  </td>
 				<td><em><?php echo $panelistdata[0]->lastname.", ".$panelistdata[0]->firstname; ?></em> </td>
 				<td><strong>Product: </strong> </td>
 				<td><em><?php echo $oneForm[0]->product; ?></em> </td>
 				
 			</tr>
 			
 			<tr>
 				<td><strong>Panelist No.: </strong> </td>
 				<td><em><?php echo $panelistdata[0]->user_id; ?></em> </td>
 				<td><strong>Date: </strong> </td>
 				<td><em><?php if(isset($answer[0])){ echo $answer[0]->date_answered;} else { echo date("m/d/Y") ;} ?></em> </td>
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
                <th rowspan="1"><p class="attrdesc" id="<?php echo('attrdesc'.$key->pdattr_id); ?>"><?php echo $key->attr_desc; ?> </p>
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
          
          <td><p class="samplecodedesc" id="<?php echo('samplecodedesc'.$key->pdt_sample_id); ?>"><?php echo $key->sample_code; ?> </p>
          </td>
          <?php 
            if (isset($formAttr)) {
              for ($i=0; $i < count($formAttr); $i++) {
                if ($formAttr[$i]->attr_desc == "N/A") {
                  
                ?>
                  <td>
                    <div class="form-check">
                      <input disabled name="" class="form-check-input answer" type="checkbox"  value="">
                    </div>
                  </td>        
                <?php
              } else {
                ?>
                  <td>
                    <?php  
                      if(isset($answer[$i])){
                       
                        if ($key->pdt_sample_id == $answer[$i]->pdt_sample_odd_id) {

                          ?>
                          <div class="form-check">
                            <input disabled checked name="<?php echo('answer'.$formAttr[$i]->pdattr_id); ?>" class="<?php echo('form-check-input answer'.$formAttr[$i]->pdattr_id); ?>" type="checkbox"  value="<?php echo($key->pdt_sample_id); ?>">
                          </div>

                        <?php } else {
                          ?>
                          <div class="form-check">
                            <input disabled name="<?php echo('answer'.$formAttr[$i]->pdattr_id); ?>" class="<?php echo('form-check-input answer'.$formAttr[$i]->pdattr_id); ?>" type="checkbox"  value="<?php echo($key->pdt_sample_id); ?>">
                          </div>
                        <?php
                        }
                      }
                    ?>
                    
                    <?php  
                      if(isset($answer[0])==FALSE){
                        ?>
                        <div class="form-check">
                          <input  name="<?php echo('answer'.$formAttr[$i]->pdattr_id); ?>" class="<?php echo('form-check-input answer'.$formAttr[$i]->pdattr_id); ?>" type="checkbox"  value="<?php echo($key->pdt_sample_id); ?>">
                        </div>
                    <?php }
                    ?>
                    
                  </td>  

                <?php
              }
              }
            }
          ?>
          
          
        </tr>

        <?php
            }
          }

         ?>
        
      </tbody>
    </table>
 		<br>
 		<input type="hidden" id="pdt_id" name="pdtid" value="<?php echo $oneForm[0]->id; ?>">
 		<input type="hidden" id="ft_id" name="ftid" value="<?php echo $oneForm[0]->form_type_id; ?>">
    <input type="hidden" id="" name="activeAttr" value="<?php echo $activeAttr; ?>">
 		<input type="hidden" id="" name="startofattr" value="<?php echo $formAttr[0]->pdattr_id; ?>">

 		<?php  
			if(isset($answer[0])){
				?>
				<div class="form-group">
				    <label for="comments">Comments</label>
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
			    <label for="comments">Comments</label>
			    <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Write your comments here..."></textarea>
			  </div>
				<button type="button" class="btn btn-primary submit" >Submit</button>		
		<?php }
		?>
 		
 		<h5 style="text-align: right;">ATM-004 F1<br>Revision 0</h5>	
 		
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
    var pdtid = $("input[name=pdtid]").val();
    var activeAttr = parseInt($("input[name=activeAttr]").val());
    var startofattr = parseInt($("input[name=startofattr]").val());
    console.log(startofattr);
    console.log(startofattr+activeAttr);
    var answers = new Array();
      for (var i = startofattr-1; i < activeAttr+startofattr-1; i++) {
        var j = i+1;
        answers.push($('.answer'+j+':checked').val());
      }
    var comments = $("textarea[name=comments]").val();
    var ftid = $("input[name=ftid]").val();
		var formdata = new Array(pdtid,answers,comments,ftid);
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