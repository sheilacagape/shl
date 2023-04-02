
 <div class="row col-md-12">
 	
 	<h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
 	<h4 class="text-center">Regional Standards and Testing Laboratories</h4>
 	<h4 class="text-center">Shelf life Evaluation Laboratory</h4>
 	<hr>
 	<h5 class="text-right">STM-004 F2</h5>
 	<h5 class="text-right">Revision 1</h5>
 	<h4 class="text-center">Data Sheet for Sensory Evaluation of Shelf-Life Samples (Paired - Difference Test)</h4>
 	<hr>
 		
 </div>
 

 <div class="row col-md-12">
<?php 
//echo '<pre>' . var_export($pdtanswers, true) . '</pre>';
?>

 	<div>
      <table class="table">
        <tr>
          <td>Request Number:</td>
          <td><u><?php echo  $pdtanswers[0]->test_request_no?></u></td>
          <td>Analyzed by:</td>
          <td>________________</td>
          <td>Signature:</td>
          <td>________________</td>
        </tr>
        <tr>
          <td>Laboratory Code Number:</td>
          <td><u><?php echo  $pdtanswers[0]->sample_code?></u></td>
          <td>Checked by:</td>
          <td>________________</td>
          <td>Signature:</td>
          <td>________________</td>
        </tr>
        <tr>
          <td>Sample Description Code:</td>
          <td><u><?php echo  $pdtanswers[0]->sample_code?></u></td>
          <td>Date of Analysis:</td>
          <td>________________</td>
          <td></td>
          <td></td>
        </tr>
        
      </table>
      
    </div>
 	
 
 	
 	<div class="col-md-12 sidetripDetails"> 
 		<div class="row col-md-12">
 				<input type="hidden"  name="evalid" id="<?php echo $pdtanswers[0]->id; ?>" value="<?php echo $pdtanswers[0]->id; ?>">
	 				<table class="table table-bordered">
			 			<thead>
			 				<tr>
			 				<th rowspan="3">Panelist</th>
			 				<th rowspan="3">Random Reference Number</th>
			 				<th colspan="5">
			 					<h5 id="<?php echo('editsamplea'.$pdtanswers[0]->id); ?>">Lab Code: <?php echo $pdtanswers[0]->tt_sample_one ?>
						 			<span data-toggle="tooltip" data-placement="top" title="Edit Sample A" class="glyphicon glyphicon-pencil color editsamplea" aria-hidden="true" id="<?php echo $pdtanswers[0]->id; ?>" style="cursor: pointer; "></span> &nbsp;
								</h5>

			        <form method="POST" style="display: none;" class="editasample" id="<?php echo "editasample".$pdtanswers[0]->id; ?>">
			          <br><label>Lab Code: </label>
			          <div class="input-group">
			          	
									<input type="text" class="form-control" name="samplea" placeholder="Sample A" value="<?php echo $pdtanswers[0]->tt_sample_one ?>">
									<div class="input-group-btn">
									<button type="button" class="btn btn-default cancelasample" id="<?php echo $pdtanswers[0]->id; ?>"><span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									<button type="button" class="btn btn-primary saveasample" id="<?php echo $pdtanswers[0]->id; ?>"><span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									</div>
								</div>
							</form>

			 				</th>
			 				<th rowspan="3">Panelist</th>
			 				<th rowspan="3">Random Reference Number</th>
			 				<th colspan="5">
			 					<h5 id="<?php echo('editsampleb'.$pdtanswers[0]->id); ?>">Lab Code: <?php echo $pdtanswers[0]->tt_sample_two ?>
						 			<span data-toggle="tooltip" data-placement="top" title="Edit Sample B" class="glyphicon glyphicon-pencil color editsampleb" aria-hidden="true" id="<?php echo $pdtanswers[0]->id; ?>" style="cursor: pointer; "></span> &nbsp;
								</h5>

			        <form method="POST" style="display: none;" class="editbsample" id="<?php echo "editbsample".$pdtanswers[0]->id; ?>">
			          <br><label>Lab Code:</label>
			          <div class="input-group">
			          	
									<input type="text" class="form-control" name="sampleb" placeholder="Sample B" value="<?php echo $pdtanswers[0]->tt_sample_two ?>">
									<div class="input-group-btn">
									<button type="button" class="btn btn-default cancelbsample" id="<?php echo $pdtanswers[0]->id; ?>"><span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									<button type="button" class="btn btn-primary savebsample" id="<?php echo $pdtanswers[0]->id; ?>"><span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									</div>
								</div>
							</form>


			 				</th>
			 				</tr>
			 				<tr>
			 				<th style="text-align: center;" colspan="5">Attributes</th>
			 				<th style="text-align: center;" colspan="5">Attributes</th>
			 				</tr>
			 				<tr>
			 				<th><?php echo  $pdtattr[0]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[1]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[2]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[3]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[4]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[0]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[1]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[2]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[3]->attr_desc?></th>
			 				<th><?php echo  $pdtattr[4]->attr_desc?></th>
			 				</tr>
			 			</thead>
			 			<tbody>
			 				<?php 
			 					for ($i=0; $i < 20; $i++) { 
			 						?>
			 						<tr>
					 					<td><?php echo $i+1; ?></td>
					 					<td><?php echo  $pdtsamples[0]->sample_code?></td>
					 					<td>
					 						<?php if (isset($perrecord[$i][0])) {
					 						if ($perrecord[$i][0]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
						 						
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][1])) {
					 						if ($perrecord[$i][1]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][2])) {
					 						if ($perrecord[$i][2]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][3])) {
					 						if ($perrecord[$i][3]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][4])) {
					 						if ($perrecord[$i][4]->pdt_sample_odd_id==$pdtsamples[0]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td><?php echo $i+1; ?></td>
					 					<td><?php echo  $pdtsamples[1]->sample_code?></td>
					 					<td>
					 						<?php if (isset($perrecord[$i][0])) {
					 						if ($perrecord[$i][0]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
						 						
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][1])) {
					 						if ($perrecord[$i][1]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][2])) {
					 						if ($perrecord[$i][2]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][3])) {
					 						if ($perrecord[$i][3]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 					<td>
					 						<?php if (isset($perrecord[$i][4])) {
					 						if ($perrecord[$i][4]->pdt_sample_odd_id==$pdtsamples[1]->pdt_sample_id) {
						 							echo "/";
						 						}
						 					} else{
						 						echo "";
						 					} ?>
					 					</td>
					 				</tr>
			 						<?php
			 					}
			 				 ?>
							
							
			 			</tbody>
			 		</table>
 			 
 		</div>

 		
 		
 	</div>

 	<br>

	<h5 >Note: If 2/3 of the total number of panelist preferred the control sample then it can be said that there is a significant difference between the samples evaluated</h5>

	<br>
	<div>
      <table class="table">
        <tr>
          <td colspan="2">Check the box for the decision:</td>
          <?php 
          	if ($left/($right+$left) > .66) {
          		?>
          		<td><input type="checkbox" checked> Significant difference</td>
          		<td><input type="checkbox"> No significant difference</td>
          	<?php } elseif ($right/($left+$right) > .66) {
          		?>
          		<td><input type="checkbox"> Significant difference</td>
          		<td><input type="checkbox" checked> No significant difference</td>
          	<?php } else {
          		?>
          		<td><input type="checkbox"> Significant difference</td>
          		<td><input type="checkbox" > No significant difference</td>
          	<?php

          	}
           ?>
          
          
          
        </tr>

        <tr>
          <td rowspan="2" colspan="2">Panelist comments: 
          	<textarea class="form-control" id="commentsa" name="commentsa" rows="3">
				    	<?php 
				    		if ($pdtanswers[0]->pdt_panel_comment_a == "") {
				    			echo $comment;
				    		} else {
				    			echo $pdtanswers[0]->pdt_panel_comment_a;
				    		}
				    		
							?>
				    </textarea>
				    <button type="button" class="btn btn-primary btn-xs submitcommenta" >Save</button>
          </td>
          <td rowspan="2" colspan="2">Panelist comments: 
          	<textarea class="form-control" id="commentsb" name="commentsb" rows="3">
				    	<?php 
				    		if ($pdtanswers[0]->pdt_panel_comment_b == "") {
				    			echo $comment;
				    		} else {
				    			echo $pdtanswers[0]->pdt_panel_comment_b;
				    		}
				    		
							?>
				    </textarea>
				    <button type="button" class="btn btn-primary btn-xs submitcommentb" >Save</button>
          </td>
          
        </tr>
        
      </table>
      
    </div>
	<br>

	
 </div>

<div class="col-md-12 "> 
<br>
<a target="_blank" href="<?= base_url('shlform/printsummary?t_id='.$id.'&ftid='.$ftid) ;?>" ><button type="button" class="btn btn-warning btn-block printPDT" >Print</button> </a>

<br>
</div>

 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">
 	$('.editsamplea').on('click',function(){
    var id = $(this).attr('id');

    $('#editasample'+id).show();
    $('#editsamplea'+id).hide();
  });

  $('.cancelasample').on('click',function(){
    var id = $(this).attr('id');

    $('#editasample'+id).hide();
    $('#editsamplea'+id).show();
  });

  $('.saveasample').on('click',function(){
    var id = $(this).attr('id');

    $('#editasample'+id).hide();
    $('#editsamplea'+id).show();

    var samplea = $("input[name=samplea").val();
    var evalid = $("input[name=evalid]").val()
    var details = new Array(evalid, samplea);
      
    $.ajax({
			url: "http://"+window.location.host+"/shl/shlform/updateSampleA",
			type: "POST",
			data: {"data":details},
			success: function(data){
				var ftid = 1;
      
      	$("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/seeEvaluationSummary',{id:data,ftid:ftid});
      
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated Sample A." );
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
				  $('.alert').text( "Unable to update Sample A." );
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


  $('.editsampleb').on('click',function(){
    var id = $(this).attr('id');

    $('#editbsample'+id).show();
    $('#editsampleb'+id).hide();
  });

  $('.cancelbsample').on('click',function(){
    var id = $(this).attr('id');

    $('#editbsample'+id).hide();
    $('#editsampleb'+id).show();
  });

  $('.savebsample').on('click',function(){
    var id = $(this).attr('id');

    $('#edibsample'+id).hide();
    $('#editsampleb'+id).show();

    var sampleb = $("input[name=sampleb").val();
    var evalid = $("input[name=evalid]").val()
    var details = new Array(evalid, sampleb);
      
    $.ajax({
			url: "http://"+window.location.host+"/shl/shlform/updateSampleB",
			type: "POST",
			data: {"data":details},
			success: function(data){
				var ftid = 1;
      
      $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/seeEvaluationSummary',{id:data,ftid:ftid});
      				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated Sample B." );
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
				  $('.alert').text( "Unable to update Sample B." );
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

  $('.submitcommenta').on('click',function(){
    var comments = $("textarea[name=commentsa]").val();
    var evalid = $("input[name=evalid]").val()
    var details = new Array(evalid, comments);
      
    $.ajax({
			url: "http://"+window.location.host+"/shl/shlform/updateCommentA",
			type: "POST",
			data: {"data":details},
			success: function(data){
				var ftid = 1;
      
      $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/seeEvaluationSummary',{id:data,ftid:ftid});
      				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated comment." );
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
				  $('.alert').text( "Unable to update comment." );
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

  $('.submitcommentb').on('click',function(){
    var comments = $("textarea[name=commentsb]").val();
    var evalid = $("input[name=evalid]").val()
    var details = new Array(evalid, comments);
      
    $.ajax({
			url: "http://"+window.location.host+"/shl/shlform/updateCommentB",
			type: "POST",
			data: {"data":details},
			success: function(data){
				var ftid = 1;
      
      $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/seeEvaluationSummary',{id:data,ftid:ftid});
      				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated comment." );
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
				  $('.alert').text( "Unable to update comment." );
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