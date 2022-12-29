<br>
<h2 class="text-center">Owner Profiles</h2>
<table class="table" id="oproftable">
  <thead>
    <tr>
      <th>Name</th>
      <th>Contact Number</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(count($owners)>0){
        foreach ($owners as $key) {
        ?>
        <tr>
          <td><?php echo $key->firstname.$key->lastname; ?></td>
          <td><?php echo $key->contact_number; ?></td>
          <td><?php echo $key->email; ?></td>

          <td>
            <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" id="<?php echo($key->user_id); ?>" >
            <li><a class="viewOwner">View</a></li>
            <li><a  class="deleteFarm">Delete</a></li>
          </ul>
        </div>
<div class="modal fade <?php echo $key->user_id.'momodal'; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="<?php echo $key->user_id.'t-modal'; ?> ">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Farm</h4>
      </div>
      <div class="modal-body">
        <small>Are you sure you want to delete <?php echo $key->farm_name; ?>?</small>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal-btn-oh" id="<?php echo $key->user_id.'_deleteSt' ?>">Yes</button>
        <button type="button" class="btn btn-primary modal-btn-di" id="<?php echo $key->user_id.'_deleteeSt' ?>">No</button>
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


    <script>
      
      $('.viewOwner').click(function(){
        $("#bc4").show();
        var id = $(this).parents('ul:first').attr('id');
      $("#profile").load("http://"+window.location.host+"/rstl_pm/profile/oneProfile",{id:id,stat:'1'});
      // alert(id);
    });

      $(document).ready(function(){
          $('#oproftable').DataTable();
      });

    </script>