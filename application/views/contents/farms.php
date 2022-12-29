

<h2 class="text-center">List of Equipments</h2>
<table class="table" id="esttable">
	<thead>
		<tr>
			<th>Code No.</th>
			<th>Equipment Name</th>
			
			<th>Current Location</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(isset($farm)){
				foreach ($farm as $key) {
		?>
		<tr>
			<td><?php echo $key->code_no; ?></td>
			<td><?php echo $key->equipment_name; ?></td>
			<td><?php echo $key->current_location; ?></td>
			
			<td>
				<!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    Action <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu" id="<?php echo($key->id); ?>" >
				    <li><a class="viewFarm">View</a></li>
				    <li><a  class="deleteFarm">Delete</a></li>
				  </ul>
				</div>
<div class="modal fade <?php echo $key->id.'momodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->id.'t-modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Equipment</h4>
      </div>
      <div class="modal-body">
      	<small>Are you sure you want to delete <?php echo $key->equipment_name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-oh" id="<?php echo $key->id.'_deleteSt' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-di" id="<?php echo $key->id.'_deleteeSt' ?>">No</button>
      </div>
    </div>
  </div>
</div>		
			</td>
		</tr>

		<?php
				}
			}

		 ?>
		
	</tbody>
</table>


    <script type="text/javascript">
    	$(document).ready(function(){
    $('#esttable').DataTable({
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    });
});



    	  $('.viewFarm').click(function(){
    	  	var id = $(this).parents('ul:first').attr('id');
        	console.log(id);
        	 $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getOneFarm",{id:id});
		        // // alert($(this).attr("class"));
		        // alert('j');
		    });

    	  $('.deleteFarm').click(function(){
    	  	var id = $(this).parents('ul:first').attr('id');
        	console.log(id);
		        // // alert($(this).attr("class"));
		        // alert('j');
		    });

    	    // delete act 
  $(".deleteFarm").on("click", function(){
   	 var id = $(this).parents('ul:first').attr('id');
	
    $('.'+id+'momodal').modal('show');
    // alert('#'+id+'t-modal');
  });

  $(".modal-btn-oh").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      // var st_id = $("input[name=sidetrip_id]").val();
      // var delact = new Array(splitString,id);
		$('.'+splitString+'momodal').modal('hide');
		// alert(splitString);
    $.ajax({
		url: "http://"+window.location.host+"/rstl_pm/main/deleteFarm",
		type: "POST",
		data: {"data":splitString},
		success: function(data){
			// alert(data);
      $('.modal-backdrop').remove() // removes the grey overlay.
			$("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getFarm");
		}
	});
  });
  
  $(".modal-btn-di").on("click", function(){
     act_id = $(this).attr("id");
     const splitString = act_id.split("_")[0];
	
    $('.'+splitString+'momodal').modal('hide');
  }); //delete act
    </script>
