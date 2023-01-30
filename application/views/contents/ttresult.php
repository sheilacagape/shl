
 <div class="row col-md-12">
 	
 	<h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
 	<h4 class="text-center">Regional Standards and Testing Laboratories</h4>
 	<h4 class="text-center">Shelf life Evaluation Laboratory</h4>
 	<hr>
 	<h4 class="text-center">Sensory Evaluation - Triangle Test Result Summary</h4>
 	<hr>
 		
 </div>



 <div class="row col-md-12">
 	
 	<div class="col-md-12 sidetripDetails"> 
 		<h5>Request No.: <u><?php echo ($ttanswers[0]->test_request_no) ?></u></h5>
		<h5>Laboratory Code No.: <u><?php echo ($ttanswers[0]->sample_code) ?></u></h5>
		<h5>Sample Description/Code: <u><?php echo ($ttanswers[0]->product_code) ?></u></h5>
		<h5>Date of Computation: ________________________</h5>
 		<br>
 	</div>
 	<?php var_dump($ttanswers) ?>
 	<br>
 	<?php var_dump($ttanswers) ?>
 	
 	<div class="col-md-12 sidetripDetails"> 
 		<div class="row col-md-12">
 				<div class=" col-md-6">
 					
 					
	 				<table class="table table-bordered">
			 			<thead>
			 				<tr>
			 				<th rowspan="2"></th>
			 				<th rowspan="2">Panelist No.</th>
			 				<th colspan="2">Responses</th>
			 				</tr>
			 				<tr>
			 				<th>Correct</th>
			 				<th>Incorrect</th>
			 				</tr>
			 			</thead>
			 			<tbody>
			 				<?php 
			 					for ($i=0; $i < 15; $i++) { 
			 						?>
			 						<tr>
					 					<td><?php echo $i+1; ?></td>
					 					<td>
					 						<?php
					 							if (isset($ttanswers[$i])) {
					 								echo $i+1;
					 							} else {
					 								echo "<em>N/A</em>";
					 							}
					 							  ?>
					 						</td>

					 					<td>
					 						<?php
					 							if (isset($ttanswers[$i])) {
					 								if ($ttanswers[$i]->tt_sample_odd_id == $triad[(($i+1)*3)-1]->triad_code_id) {
					 									echo $ttanswers[$i]->tt_sample_odd_id;
					 									echo "<br>";
					 									echo $triad[(($i+1)*3)-1]->triad_code_id;
					 								}
					 							} else {
					 								echo "<em>N/A</em>";
					 							}
					 							  ?>
					 					</td>
					 					<td>
					 						<?php
					 							if (isset($ttanswers[$i])) {
					 								if ($ttanswers[$i]->tt_sample_odd_id != $triad[(($i+1)*3)-1]->triad_code_id) {
					 									echo $ttanswers[$i]->tt_sample_odd_id;
					 									echo "<br>";
					 									echo $triad[(($i+1)*3)-1]->triad_code_id;
					 								}
					 							} else {
					 								echo "<em>N/A</em>";
					 							}
					 							  ?>
					 					</td>
					 				</tr>
			 						<?php
			 					}
			 				 ?>
							<tr>
			 					<td></td>
			 					<td>Total</td>
			 					<td></td>
			 					<td></td>
			 				</tr>

			 				
							
			 			</tbody>
			 		</table>
				 </div>
				 <div class=" col-md-6">
				 	<h5>Table 1</h5>
 					
	 				<table class="table table-bordered">
			 			<thead>
			 				<th>n</th>
			 				<th>α = 0,05</th>
			 				
			 			</thead>
			 			<tbody>
			 				<tr><td>6</td><td>5</td></tr>
							<tr><td>7</td><td>5</td></tr>
							<tr><td>8</td><td>6</td></tr>
							<tr><td>9</td><td>6</td></tr>
							<tr><td>10</td><td>7</td></tr>
							<tr><td>11</td><td>7</td></tr>
							<tr><td>12</td><td>8</td></tr>
							<tr><td>13</td><td>8</td></tr>
							<tr><td>14</td><td>9</td></tr>
							<tr><td>15</td><td>9</td></tr>
							<tr><td>16</td><td>9</td></tr>
							<tr><td>17</td><td>10</td></tr>
							<tr><td>18</td><td>10</td></tr>
							<tr><td>19</td><td>11</td></tr>
							<tr><td>20</td><td>11</td></tr>

			 			</tbody>
			 		</table>
			 		<p>*n = number of panelists	</p>
				 </div>
 			 
 		</div>

 		
 		
 	</div>
 	<br>
 	<ol>
 		<li>If the number of correct responses is greater than or equal to the number given in Table 1 (corresponding to the number of panelists and 0.05 α-risk level), conclude that a perceptible difference exists between samples A and B.</li>
 		<li>Otherwise, test sample (A) and controlled sample (B) has no perceptible difference at all.</li>
 	</ol>
 	<br>

	<h5 >Remarks: ____________________________________________________________________________________________</h5>

	<br>
	<div>
      <table class="table">
        <tr>
          <td style="text-align: left;">Computed by: ________________</td>
          <td style="text-align: right;">Signature/Date: ________________</td>
        </tr>
        <tr>
          <td style="text-align: left;">Checked by: ________________</td>
          <td style="text-align: right;">Signature/Date: ________________</td>
        </tr>
      </table>
      
    </div>
	<br>

	
	 		
	<h5 style="text-align: right;">STM-023-F3<br>Revision 0<br>Effectivity Date: 16 March 2020</h5>	

 </div>


 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">

 </script>