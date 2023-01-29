<div class="page-header">
  <h1>Sensory Evaluation <small>Summary Sheet</small></h1>
</div>


<div class="row">
  <table class="table table-striped table-bordered table-hover" id="esttable">
  <thead style="background-color: lightblue">
    <tr>
      <th>Evaluation Type </th>
      <th>Sample Name: </th>
      
      <th>Created by: </th>
      <th>Date Created</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    
  <?php 
      if(isset($forms)){
        
        foreach ($forms as $key) {
          ?>
            <tr>
              
              <input type="hidden" id="ft_id" name="<?php echo "ftid".$key->id; ?>" value="<?php echo $key->form_type_id; ?>">
              <td><?php echo $key->test_type ?></td>
              <td><?php echo $key->product ?></td>
              <td><?php echo $key->firstname." ".$key->lastname; ?></td>
              <td><?php echo $key->date_created; ?></td>
              <td><a href="#" class="btn btn-warning seesummary" id="<?php echo $key->id; ?>" role="button">See Responses</a></td>
            </tr> 
<?php  
  }
}
?>
  
</div>

 <script type="text/javascript">
    $(".seesummary").on("click", function(){
      t_id = $(this).attr("id");
           
      var ftid = $("input[name=ftid"+t_id+"]").val();
      var formdata = new Array(t_id,ftid);
      console.log(formdata);
      $("#reloadDiv").load('http://'+window.location.host+'/shl/shlform/seeEvaluationSummary',{id:t_id,ftid:ftid});
      
    });
 </script>