<h2 class="text-center">List of Tourist Spots</h2>


<table class="table">
  <thead>
    <tr>
      <th>Sidetrip Name</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($tspots)){
        foreach ($tspots as $key) {
      ?>
    <tr>
      <td><?php echo $key->sidetrip_name; ?></td>
      <td><?php echo $key->sidetrip_description; ?></td>
      <td>
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" id="<?php echo($key->sidetrip_id); ?>">
            <li><a class="viewTspot">View</a></li>
            <li><a class="deleteTspot">Delete</a></li>
        
          </ul>
        </div>
<div class="modal fade <?php echo $key->sidetrip_id.'mmodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->sidetrip_id.'t-modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Sidetrip</h4>
      </div>
      <div class="modal-body">
        <small>Are you sure you want to delete <?php echo $key->sidetrip_name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-ne" id="<?php echo $key->sidetrip_id.'_deleteSt' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-ani" id="<?php echo $key->sidetrip_id.'_deleteeSt' ?>">No</button>
      </div>
    </div>
  </div>
</div>            
      </td>
    </tr>
      <?php
          # code...
        }
      }

     ?>
    
  </tbody>
</table>

 <script type="text/javascript">
        $('.viewTspot').click(function(){
          var id = $(this).parents('ul:first').attr('id');
          console.log(id);
           $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/tspot/getOneTspot",{id:id});
            // // alert($(this).attr("class"));
            // alert('j');
        });

        $('.deleteTspot').click(function(){
          var id = $(this).parents('ul:first').attr('id');
          console.log(id);
            // // alert($(this).attr("class"));
            // alert('j');
        });

        // delete act 
  $(".deleteTspot").on("click", function(){
     var id = $(this).parents('ul:first').attr('id');
  
    $('.'+id+'mmodal').modal('show');
    // alert('#'+id+'t-modal');
  });

  $(".modal-btn-ne").on("click", function(){
      act_id = $(this).attr("id");
      const splitString = act_id.split("_")[0];
      // var st_id = $("input[name=sidetrip_id]").val();
      // var delact = new Array(splitString,farm_id);
    $('.'+splitString+'mmodal').modal('hide');
    // alert(splitString);
    $.ajax({
    url: "http://"+window.location.host+"/rstl_pm/tspot/deleteSidetrip",
    type: "POST",
    data: {"data":splitString},
    success: function(data){
      // alert(data);
      $("#reloadDiv").load("http://"+window.location.host+"/rstl_pm/main/getTspots");
    }
  });
  });
  
  $(".modal-btn-ani").on("click", function(){
     act_id = $(this).attr("id");
     const splitString = act_id.split("_")[0];
  
    $('.'+splitString+'mmodal').modal('hide');
  }); //delete act
    </script>
