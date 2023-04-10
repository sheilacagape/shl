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
 	<h4 class="text-center">Sensory Evaluation - Triangle Test Sample Monitoring</h4>
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
          <strong>Request Rererence Number: </strong><em><?php echo $oneForm[0]->test_request_no; ?></em>
          <br><strong>Sample Code: </strong><em><?php echo $oneForm[0]->sample_code; ?></em>
          <br><strong>Sample Description: </strong><em><?php echo $oneForm[0]->product; ?></em>
          
          
          
        </div>

        <div class="panel-body" id="editformdetails" style="display: none;">
          
          <form method="POST">
              <input type="hidden" id="tt_id" name="ttid" value="<?php echo $oneForm[0]->id; ?>">
              <input type="hidden" id="ft_id" name="ftid" value="<?php echo $oneForm[0]->form_type_id; ?>">
                            
              <div class="form-group">
                <label>Sample Description</label>
                <input class="form-control" name="usamplename" placeholder="Sample Description" type="text" value="<?php echo $oneForm[0]->product; ?>">
              </div>
              
              
              <div class="form-group">
                <label>Request Reference Number</label>
                <input class="form-control" name="utrfno" placeholder="R10-2022-SHL-" type="text" value="<?php echo $oneForm[0]->test_request_no; ?>">
              </div>

              <div class="form-group">
                <label>Sample Code</label>
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
 		<div class="col-md-6">

 		<h5 id="<?php echo('evaldate'.$oneForm[0]->id); ?>">Date of Evaluation: <?php echo $oneForm[0]->date_evaluation ?>
 			<span data-toggle="tooltip" data-placement="top" title="Edit Date of Evaluation" class="glyphicon glyphicon-pencil color editevaldate" aria-hidden="true" id="<?php echo $oneForm[0]->id; ?>" style="cursor: pointer; "></span> &nbsp;
		</h5>

        <form method="POST" style="display: none;" class="editeval" id="<?php echo "editdateeval".$oneForm[0]->id; ?>">
          <br><label>Date of Evaluation</label>
          <div class="input-group">
          	
						<input type="date" class="form-control" name="evaldate" placeholder="Evaluation Date" value="<?php echo date('d/m/Y',strtotime($oneForm[0]->date_evaluation)) ?>  ?>">
						<div class="input-group-btn">
						<button type="button" class="btn btn-default cancelevaldate" id="<?php echo $oneForm[0]->id; ?>"><span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
						<button type="button" class="btn btn-primary saveevaldate" id="<?php echo $oneForm[0]->id; ?>"><span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
						</div>
					</div>
        </form>	
 		<br>

 		</div>
 		
 		
 	</div>
 	
 	<div class="col-md-12 sidetripDetails"> 
 		<div class="row col-md-12">
 			<div class="col-md-6 well">
 				<div class=" col-md-6">
 					<h5 id="<?php echo('editsamplea'.$oneForm[0]->id); ?>">Sample A: <?php echo $oneForm[0]->tt_sample_one ?>
			 			<span data-toggle="tooltip" data-placement="top" title="Edit Sample A" class="glyphicon glyphicon-pencil color editsamplea" aria-hidden="true" id="<?php echo $oneForm[0]->id; ?>" style="cursor: pointer; "></span> &nbsp;
					</h5>

			        <form method="POST" style="display: none;" class="editasample" id="<?php echo "editasample".$oneForm[0]->id; ?>">
			          <br><label>Sample A:</label>
			          <div class="input-group">
			          	
									<input type="text" class="form-control" name="samplea" placeholder="Sample A" value="<?php echo $oneForm[0]->tt_sample_one ?>">
									<div class="input-group-btn">
									<button type="button" class="btn btn-default cancelasample" id="<?php echo $oneForm[0]->id; ?>"><span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									<button type="button" class="btn btn-primary saveasample" id="<?php echo $oneForm[0]->id; ?>"><span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									</div>
					</div>
				</form>
	 				<table class="table table-bordered">
			 			<thead>
			 				<th>Codes</th>
			 				<th>Triad #</th>
			 				
			 			</thead>
			 			<tbody>

			 				<tr><td><?php echo $triadcodes[0]->triad_code; ?></td><td>1</td></tr>
							<tr><td><?php echo $triadcodes[3]->triad_code; ?></td><td>2</td></tr>
							<tr><td><?php echo $triadcodes[4]->triad_code; ?></td><td>*2</td></tr>
							<tr><td><?php echo $triadcodes[6]->triad_code; ?></td><td>3</td></tr>
							<tr><td><?php echo $triadcodes[8]->triad_code; ?></td><td>3</td></tr>
							<tr><td><?php echo $triadcodes[10]->triad_code; ?></td><td>*4</td></tr>
							<tr><td><?php echo $triadcodes[11]->triad_code; ?></td><td>4</td></tr>
							<tr><td><?php echo $triadcodes[14]->triad_code; ?></td><td>5</td></tr>
							<tr><td><?php echo $triadcodes[16]->triad_code; ?></td><td>*6</td></tr>
							<tr><td><?php echo $triadcodes[18]->triad_code; ?></td><td>7</td></tr>
							<tr><td><?php echo $triadcodes[21]->triad_code; ?></td><td>8</td></tr>
							<tr><td><?php echo $triadcodes[22]->triad_code; ?></td><td>*8</td></tr>
							<tr><td><?php echo $triadcodes[24]->triad_code; ?></td><td>9</td></tr>
							<tr><td><?php echo $triadcodes[26]->triad_code; ?></td><td>9</td></tr>
							<tr><td><?php echo $triadcodes[28]->triad_code; ?></td><td>*10</td></tr>
							<tr><td><?php echo $triadcodes[29]->triad_code; ?></td><td>10</td></tr>
							<tr><td><?php echo $triadcodes[32]->triad_code; ?></td><td>11</td></tr>
							<tr><td><?php echo $triadcodes[34]->triad_code; ?></td><td>*12</td></tr>
							<tr><td><?php echo $triadcodes[36]->triad_code; ?></td><td>13</td></tr>
							<tr><td><?php echo $triadcodes[39]->triad_code; ?></td><td>14</td></tr>
							<tr><td><?php echo $triadcodes[40]->triad_code; ?></td><td>*14</td></tr>
							<tr><td><?php echo $triadcodes[42]->triad_code; ?></td><td>15</td></tr>
							<tr><td><?php echo $triadcodes[44]->triad_code; ?></td><td>15</td></tr>

			 			</tbody>
			 		</table>
				 </div>
				 <div class=" col-md-6">
				 	<h5 id="<?php echo('editsampleb'.$oneForm[0]->id); ?>">Sample B: <?php echo $oneForm[0]->tt_sample_two ?>
			 			<span data-toggle="tooltip" data-placement="top" title="Edit Sample B" class="glyphicon glyphicon-pencil color editsampleb" aria-hidden="true" id="<?php echo $oneForm[0]->id; ?>" style="cursor: pointer; "></span> &nbsp;
					</h5>

			        <form method="POST" style="display: none;" class="editbsample" id="<?php echo "editbsample".$oneForm[0]->id; ?>">
			          <br><label>Sample B:</label>
			          <div class="input-group">
			          	
									<input type="text" class="form-control" name="sampleb" placeholder="Sample B" value="<?php echo $oneForm[0]->tt_sample_two ?>">
									<div class="input-group-btn">
									<button type="button" class="btn btn-default cancelbsample" id="<?php echo $oneForm[0]->id; ?>"><span class="glyphicon glyphicon-remove-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									<button type="button" class="btn btn-primary savebsample" id="<?php echo $oneForm[0]->id; ?>"><span class="glyphicon glyphicon-ok-circle color" aria-hidden="true" style="cursor: pointer; "></span></button>
									</div>
					</div>
				</form>
					<table class="table table-bordered">
			 			<thead>
			 				<th>Codes</th>
			 				<th>Triad #</th>
			 				
			 			</thead>
			 			<tbody>
			 				<tr><td><?php echo $triadcodes[1]->triad_code; ?></td><td>*1</td></tr>
							<tr><td><?php echo $triadcodes[2]->triad_code; ?></td><td>1</td></tr>
							<tr><td><?php echo $triadcodes[5]->triad_code; ?></td><td>2</td></tr>
							<tr><td><?php echo $triadcodes[7]->triad_code; ?></td><td>*3</td></tr>
							<tr><td><?php echo $triadcodes[9]->triad_code; ?></td><td>4</td></tr>
							<tr><td><?php echo $triadcodes[12]->triad_code; ?></td><td>5</td></tr>
							<tr><td><?php echo $triadcodes[13]->triad_code; ?></td><td>*5</td></tr>
							<tr><td><?php echo $triadcodes[15]->triad_code; ?></td><td>6</td></tr>
							<tr><td><?php echo $triadcodes[17]->triad_code; ?></td><td>6</td></tr>
							<tr><td><?php echo $triadcodes[19]->triad_code; ?></td><td>*7</td></tr>
							<tr><td><?php echo $triadcodes[20]->triad_code; ?></td><td>7</td></tr>
							<tr><td><?php echo $triadcodes[23]->triad_code; ?></td><td>8</td></tr>
							<tr><td><?php echo $triadcodes[25]->triad_code; ?></td><td>*9</td></tr>
							<tr><td><?php echo $triadcodes[27]->triad_code; ?></td><td>10</td></tr>
							<tr><td><?php echo $triadcodes[30]->triad_code; ?></td><td>11</td></tr>
							<tr><td><?php echo $triadcodes[31]->triad_code; ?></td><td>*11</td></tr>
							<tr><td><?php echo $triadcodes[33]->triad_code; ?></td><td>12</td></tr>
							<tr><td><?php echo $triadcodes[35]->triad_code; ?></td><td>12</td></tr>
							<tr><td><?php echo $triadcodes[37]->triad_code; ?></td><td>*13</td></tr>
							<tr><td><?php echo $triadcodes[38]->triad_code; ?></td><td>13</td></tr>
							<tr><td><?php echo $triadcodes[41]->triad_code; ?></td><td>14</td></tr>
							<tr><td><?php echo $triadcodes[43]->triad_code; ?></td><td>*15</td></tr>
							<tr><td>n/a</td><td>n/a</td></tr>

			 			</tbody>
			 		</table>
				 </div>
 			</div>
 			
 			<div class=" col-md-6" id="showcodes">
 				<div class=" col-md-12" >
	 				<table class="table table-bordered">
			 			<thead>
			 				<th>Triad</th>
			 				<th colspan="3">Codes <button id="editcodesbtn" type="button" style="float: right;" class="btn btn-info btn-xs">Edit</button></th>
			 				
			 			</thead>
			 			<tbody>
			 				<tr><td>  1.) ABB</td><td><?php echo $triadcodes[0]->triad_code; ?></td><td><?php echo $triadcodes[1]->triad_code; ?></td><td><?php echo $triadcodes[2]->triad_code; ?></td></tr>
							<tr><td>  2.) AAB</td><td><?php echo $triadcodes[3]->triad_code; ?></td><td><?php echo $triadcodes[4]->triad_code; ?></td><td><?php echo $triadcodes[5]->triad_code; ?></td></tr>
							<tr><td>  3.) ABA</td><td><?php echo $triadcodes[6]->triad_code; ?></td><td><?php echo $triadcodes[7]->triad_code; ?></td><td><?php echo $triadcodes[8]->triad_code; ?></td></tr>
							<tr><td>  4.) BAA</td><td><?php echo $triadcodes[9]->triad_code; ?></td><td><?php echo $triadcodes[10]->triad_code; ?></td><td><?php echo $triadcodes[11]->triad_code; ?></td></tr>
							<tr><td>  5.) BBA</td><td><?php echo $triadcodes[12]->triad_code; ?></td><td><?php echo $triadcodes[13]->triad_code; ?></td><td><?php echo $triadcodes[14]->triad_code; ?></td></tr>
							<tr><td>  6.) BAB</td><td><?php echo $triadcodes[15]->triad_code; ?></td><td><?php echo $triadcodes[16]->triad_code; ?></td><td><?php echo $triadcodes[17]->triad_code; ?></td></tr>

							<tr><td>  7.) ABB</td><td><?php echo $triadcodes[18]->triad_code; ?></td><td><?php echo $triadcodes[19]->triad_code; ?></td><td><?php echo $triadcodes[20]->triad_code; ?></td></tr>
							<tr><td>  8.) AAB</td><td><?php echo $triadcodes[21]->triad_code; ?></td><td><?php echo $triadcodes[22]->triad_code; ?></td><td><?php echo $triadcodes[23]->triad_code; ?></td></tr>
							<tr><td>  9.) ABA</td><td><?php echo $triadcodes[24]->triad_code; ?></td><td><?php echo $triadcodes[25]->triad_code; ?></td><td><?php echo $triadcodes[26]->triad_code; ?></td></tr>
							<tr><td>10.) BAA</td><td><?php echo $triadcodes[27]->triad_code; ?></td><td><?php echo $triadcodes[28]->triad_code; ?></td><td><?php echo $triadcodes[29]->triad_code; ?></td></tr>
							<tr><td>11.) BBA</td><td><?php echo $triadcodes[30]->triad_code; ?></td><td><?php echo $triadcodes[31]->triad_code; ?></td><td><?php echo $triadcodes[32]->triad_code; ?></td></tr>
							<tr><td>12.) BAB</td><td><?php echo $triadcodes[33]->triad_code; ?></td><td><?php echo $triadcodes[34]->triad_code; ?></td><td><?php echo $triadcodes[35]->triad_code; ?></td></tr>

							<tr><td>13.) ABB</td><td><?php echo $triadcodes[36]->triad_code; ?></td><td><?php echo $triadcodes[37]->triad_code; ?></td><td><?php echo $triadcodes[38]->triad_code; ?></td></tr>
							<tr><td>14.) AAB</td><td><?php echo $triadcodes[39]->triad_code; ?></td><td><?php echo $triadcodes[40]->triad_code; ?></td><td><?php echo $triadcodes[41]->triad_code; ?></td></tr>
							<tr><td>15.) ABA</td><td><?php echo $triadcodes[42]->triad_code; ?></td><td><?php echo $triadcodes[43]->triad_code; ?></td><td><?php echo $triadcodes[44]->triad_code; ?></td></tr>

			 			</tbody>
			 			
			 		</table>

			 	
				 </div>	
				 
 			</div>

 			<div class=" col-md-6" style="display: none;" id="editcodes">
 				<input type="hidden"  name="evalid" id="<?php echo $oneForm[0]->id; ?>" value="<?php echo $oneForm[0]->id; ?>">
				 <div class=" col-md-12" >
	 				<table class="table table-bordered">
			 			<thead>
			 				<th>Triad</th>
			 				<th colspan="3">Codes <button id="saveeditbtn" type="button" style="float: right;" class="btn btn-info btn-xs">Save</button> <button id="canceleditbtn" type="button" style="float: right;" class="btn btn-warning btn-xs">Cancel</button></th>
			 				
			 			</thead>
			 			<tbody>
			 				<tr><td>  1.) ABB</td>
			 					<td><input name="1" id="<?php echo $triadcodes[0]->triad_code_id; ?>" value="<?php echo $triadcodes[0]->triad_code; ?>"></td>
			 					<td><input name="2" id="<?php echo $triadcodes[1]->triad_code_id; ?>" value="<?php echo $triadcodes[1]->triad_code; ?>"></td>
			 					<td><input name="3" id="<?php echo $triadcodes[2]->triad_code_id; ?>" value="<?php echo $triadcodes[2]->triad_code; ?>"></td>
			 				</tr>
							<tr><td>  2.) AAB</td>
								<td><input name="4" id="<?php echo $triadcodes[3]->triad_code_id; ?>" value="<?php echo $triadcodes[3]->triad_code; ?>"></td>
								<td><input name="5" id="<?php echo $triadcodes[4]->triad_code_id; ?>" value="<?php echo $triadcodes[4]->triad_code; ?>"></td>
								<td><input name="6" id="<?php echo $triadcodes[5]->triad_code_id; ?>" value="<?php echo $triadcodes[5]->triad_code; ?>"></td>
							</tr>
							<tr><td>  3.) ABA</td>
								<td><input name="7" id="<?php echo $triadcodes[6]->triad_code_id; ?>" value="<?php echo $triadcodes[6]->triad_code; ?>"></td>
								<td><input name="8" id="<?php echo $triadcodes[7]->triad_code_id; ?>" value="<?php echo $triadcodes[7]->triad_code; ?>"></td>
								<td><input name="9" id="<?php echo $triadcodes[8]->triad_code_id; ?>" value="<?php echo $triadcodes[8]->triad_code; ?>"></td>
							</tr>
							<tr><td>  4.) BAA</td>
								<td><input name="10" id="<?php echo $triadcodes[9]->triad_code_id; ?>" value="<?php echo $triadcodes[9]->triad_code; ?>"></td>
								<td><input name="11" id="<?php echo $triadcodes[10]->triad_code_id; ?>" value="<?php echo $triadcodes[10]->triad_code; ?>"></td>
								<td><input name="12" id="<?php echo $triadcodes[11]->triad_code_id; ?>" value="<?php echo $triadcodes[11]->triad_code; ?>"></td>
							</tr>
							<tr><td>  5.) BBA</td>
								<td><input name="13" id="<?php echo $triadcodes[12]->triad_code_id; ?>" value="<?php echo $triadcodes[12]->triad_code; ?>"></td>
								<td><input name="14" id="<?php echo $triadcodes[13]->triad_code_id; ?>" value="<?php echo $triadcodes[13]->triad_code; ?>"></td>
								<td><input name="15" id="<?php echo $triadcodes[14]->triad_code_id; ?>" value="<?php echo $triadcodes[14]->triad_code; ?>"></td>
							</tr>
							<tr><td>  6.) BAB</td>
								<td><input name="16" id="<?php echo $triadcodes[15]->triad_code_id; ?>" value="<?php echo $triadcodes[15]->triad_code; ?>"></td>
								<td><input name="17" id="<?php echo $triadcodes[16]->triad_code_id; ?>" value="<?php echo $triadcodes[16]->triad_code; ?>"></td>
								<td><input name="18" id="<?php echo $triadcodes[17]->triad_code_id; ?>" value="<?php echo $triadcodes[17]->triad_code; ?>"></td>
							</tr>

							<tr><td>  7.) ABB</td>
								<td><input name="19" id="<?php echo $triadcodes[18]->triad_code_id; ?>" value="<?php echo $triadcodes[18]->triad_code; ?>"></td>
								<td><input name="20" id="<?php echo $triadcodes[19]->triad_code_id; ?>" value="<?php echo $triadcodes[19]->triad_code; ?>"></td>
								<td><input name="21" id="<?php echo $triadcodes[20]->triad_code_id; ?>" value="<?php echo $triadcodes[20]->triad_code; ?>"></td>
							</tr>
							<tr><td>  8.) AAB</td>
								<td><input name="22" id="<?php echo $triadcodes[21]->triad_code_id; ?>" value="<?php echo $triadcodes[21]->triad_code; ?>"></td>
								<td><input name="23" id="<?php echo $triadcodes[22]->triad_code_id; ?>" value="<?php echo $triadcodes[22]->triad_code; ?>"></td>
								<td><input name="24" id="<?php echo $triadcodes[23]->triad_code_id; ?>" value="<?php echo $triadcodes[23]->triad_code; ?>"></td>
							</tr>
							<tr><td>  9.) ABA</td>
								<td><input name="25" id="<?php echo $triadcodes[24]->triad_code_id; ?>" value="<?php echo $triadcodes[24]->triad_code; ?>"></td>
								<td><input name="26" id="<?php echo $triadcodes[25]->triad_code_id; ?>" value="<?php echo $triadcodes[25]->triad_code; ?>"></td>
								<td><input name="27" id="<?php echo $triadcodes[26]->triad_code_id; ?>" value="<?php echo $triadcodes[26]->triad_code; ?>"></td>
							</tr>
							<tr><td>10.) BAA</td>
								<td><input name="28" id="<?php echo $triadcodes[27]->triad_code_id; ?>" value="<?php echo $triadcodes[27]->triad_code; ?>"></td>
								<td><input name="29" id="<?php echo $triadcodes[28]->triad_code_id; ?>" value="<?php echo $triadcodes[28]->triad_code; ?>"></td>
								<td><input name="30" id="<?php echo $triadcodes[29]->triad_code_id; ?>" value="<?php echo $triadcodes[29]->triad_code; ?>"></td>
							</tr>
							<tr><td>11.) BBA</td>
								<td><input name="31" id="<?php echo $triadcodes[30]->triad_code_id; ?>" value="<?php echo $triadcodes[30]->triad_code; ?>"></td>
								<td><input name="32" id="<?php echo $triadcodes[31]->triad_code_id; ?>" value="<?php echo $triadcodes[31]->triad_code; ?>"></td>
								<td><input name="33" id="<?php echo $triadcodes[32]->triad_code_id; ?>" value="<?php echo $triadcodes[32]->triad_code; ?>"></td>
							</tr>
							<tr><td>12.) BAB</td>
								<td><input name="34" id="<?php echo $triadcodes[33]->triad_code_id; ?>" value="<?php echo $triadcodes[33]->triad_code; ?>"></td>
								<td><input name="35" id="<?php echo $triadcodes[34]->triad_code_id; ?>" value="<?php echo $triadcodes[34]->triad_code; ?>"></td>
								<td><input name="36" id="<?php echo $triadcodes[35]->triad_code_id; ?>" value="<?php echo $triadcodes[35]->triad_code; ?>"></td>
							</tr>

							<tr><td>13.) ABB</td>
								<td><input name="37" id="<?php echo $triadcodes[36]->triad_code_id; ?>" value="<?php echo $triadcodes[36]->triad_code; ?>"></td>
								<td><input name="38" id="<?php echo $triadcodes[37]->triad_code_id; ?>" value="<?php echo $triadcodes[37]->triad_code; ?>"></td>
								<td><input name="39" id="<?php echo $triadcodes[38]->triad_code_id; ?>" value="<?php echo $triadcodes[38]->triad_code; ?>"></td>
							</tr>
							<tr><td>14.) AAB</td>
								<td><input name="40" id="<?php echo $triadcodes[39]->triad_code_id; ?>" value="<?php echo $triadcodes[39]->triad_code; ?>"></td>
								<td><input name="41" id="<?php echo $triadcodes[40]->triad_code_id; ?>" value="<?php echo $triadcodes[40]->triad_code; ?>"></td>
								<td><input name="42" id="<?php echo $triadcodes[41]->triad_code_id; ?>" value="<?php echo $triadcodes[41]->triad_code; ?>"></td>
							</tr>
							<tr><td>15.) ABA</td>
								<td><input name="43" id="<?php echo $triadcodes[42]->triad_code_id; ?>" value="<?php echo $triadcodes[42]->triad_code; ?>"></td>
								<td><input name="44" id="<?php echo $triadcodes[43]->triad_code_id; ?>" value="<?php echo $triadcodes[43]->triad_code; ?>"></td>
								<td><input name="45" id="<?php echo $triadcodes[44]->triad_code_id; ?>" value="<?php echo $triadcodes[44]->triad_code; ?>"></td>
							</tr>

			 			</tbody>
			 			
			 		</table>

			 	
				 </div>	
 			</div>
			 
 		</div>
 		<table>
 			<tr>
 				<td>* middle sample</td>
 			</tr>
 		</table>
 		<br>

 		<h5 >Prepared by: ________________</h5>
		<h5 >Checked by: ________________</h5>
 		<br>

 		
 		<h5>Page 1 of 1 </h5>	
 		
 		<h5 style="text-align: right;">STM-023-F1<br>Revision 0<br>Effectivity Date: 16 March 2020</h5>	
 		
 	</div>

 </div>

 <div class="col-md-12 "> 
<br>
<a target="_blank" href="<?= base_url('shlform/printformone?t_id='.$oneForm[0]->id.'&ftid='.$oneForm[0]->form_type_id) ;?>" ><button type="button" class="btn btn-warning btn-block printTT" >Print</button> </a>

<br>
</div>



 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">
 	$('.editevaldate').on('click',function(){
    var id = $(this).attr('id');

    $('#editdateeval'+id).show();
    $('#evaldate'+id).hide();
  });

  $('.cancelevaldate').on('click',function(){
    var id = $(this).attr('id');

    $('#editdateeval'+id).hide();
    $('#evaldate'+id).show();
  });

  $('.saveevaldate').on('click',function(){
    var id = $(this).attr('id');

    $('#editdateeval'+id).hide();
    $('#evaldate'+id).show();

    var evaldate = $("input[name=evaldate").val();
    var evalid = $("input[name=evalid]").val()
    var details = new Array(evalid, evaldate);
      
    $.ajax({
			url: "http://"+window.location.host+"/shl/shlform/updateEvalDate",
			type: "POST",
			data: {"data":details},
			success: function(data){

				$("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated evaluation date." );
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
				  $('.alert').text( "Unable to update evaluation date." );
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

				$("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
				
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

				$("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
				
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

	$('#editcodesbtn').on('click',function(){
 		$('#editcodes').show();
 		$('#showcodes').hide();
 	});

 	$('#canceleditbtn').on('click',function(){
 		$('#showcodes').show();
 		$('#editcodes').hide();
 	});

 	$('#saveeditbtn').on('click',function(){
 		$('#showcodes').show();
 		$('#editcodes').hide();
 		var evalid = $("input[name=evalid]").val()
 		var triadcodes = new Array();



 		var triadcodesid = new Array();
 		for (var i = 1; i < 46; i++) {
 			triadcodes.push($("input[name="+i+"]").val());
 			triadcodesid.push($("input[name="+i+"]").attr('id'));
 		}
 		var test = new Set(triadcodes).size !== triadcodes.length;
 		if(test==true){
 			alert("There's a duplicate in the triad codes.");
 			return false;
 		} 

 		var data = new Array();
 		data.push(triadcodes);
 		data.push(triadcodesid);
 		data.push(evalid);
 		console.log(data);
 		
 		$.ajax({
			url: "http://"+window.location.host+"/shl/shlform/updateTriadCodes",
			type: "POST",
			data: {"data":data},
			success: function(data){

				$("#reloadDiv").load("http://"+window.location.host+"/shl/shlform/getOneForm",{id:data});
				
				var fade_in = function() {
				  // $(".alert").fadeOut().empty();
				  $('.alert').text( "Successfully updated triad codes." );
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
				  $('.alert').text( "Unable to update triad codes." );
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