
 <div class="row col-md-12">
 	
 	<h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY - X</h3>
 	<h4 class="text-center">Regional Standards and Testing Laboratories</h4>
 	<h4 class="text-center">Shelf life Evaluation Laboratory</h4>
 	<hr>
 	<h5 class="text-right">ATM-004 F2</h5>
 	<h5 class="text-right">Revision 1</h5>
 	<h4 class="text-center">Data Sheet for Sensory Evaluation of Shelf-Life Samples (Paired - Difference Test)</h4>
 	<hr>
 		
 </div>

<?php var_dump($perrecord) ?>

 <div class="row col-md-12">

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
 				
	 				<table class="table ">
			 			<thead>
			 				<tr>
			 				<th rowspan="3">Panelist</th>
			 				<th rowspan="3">Random Reference Number</th>
			 				<th colspan="5">Lab Code: <?php echo  $pdtsamples[0]->sample_code?></th>
			 				<th rowspan="3">Panelist</th>
			 				<th rowspan="3">Random Reference Number</th>
			 				<th colspan="5">Lab Code: <?php echo  $pdtsamples[1]->sample_code?></th>
			 				</tr>
			 				<tr>
			 				<th colspan="5">Attributes</th>
			 				<th colspan="5">Attributes</th>
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
					 					<td>1</td>
					 					<td></td>
					 					<td></td>
					 					<td></td>
					 					<td></td>
					 					<td></td>
					 					<td><?php echo $i+1; ?></td>
					 					<td>2</td>
					 					<td></td>
					 					<td></td>
					 					<td></td>
					 					<td></td>
					 					<td></td>
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
          <td><input type="checkbox"> Significant difference</td>
          <td><input type="checkbox"> No significant difference</td>
          
          
        </tr>

        <tr>
          <td rowspan="2" colspan="2">Panelist comments: 
          	<br> ______________________________________________________________
          	<br> ______________________________________________________________
          	<br> ______________________________________________________________
          </td>
          <td rowspan="2" colspan="2">Panelist comments: 
          	<br> ______________________________________________________________
          	<br> ______________________________________________________________
          	<br> ______________________________________________________________
          </td>
          
        </tr>
        
      </table>
      
    </div>
	<br>

	
 </div>

<div class="col-md-12 "> 
<br>
<button type="button" class="btn btn-warning btn-block printTT" >Print</button>
<br>
</div>

 <div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

 <script type="text/javascript">

 </script>