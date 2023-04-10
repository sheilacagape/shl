
  <nav style="background-color: darkblue" class="navbar   navbar-fixed-top"  role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a style="pointer-events: none; cursor: default;font-weight: bold;color: white; " class="navbar-brand">Shelf Life Laboratory</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <img style="width: 50px; height: 50px; float: right;" src="<?php echo $user[0]->user_pic; ?>">

          
        
        <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
              <li class="dropdown" >
                <a style="color: white" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user[0]->username; ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <!-- <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li> -->
                  <!-- <li class="divider"></li> -->
                  <li><a href="<?= base_url("main/logout"); ?>">Logout</a></li>
                </ul>
              </li>
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<div>
<br><br><br>

  <div class="col-md-2">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        <img style="width: 50px; height: 50px; float: left; margin-right: 5px; " src="<?php echo $user[0]->user_pic; ?>">

        <h4 class="list-group-item-heading"><?php echo $user[0]->firstname.' '.$user[0]->lastname; ?></h4>
        <p class="list-group-item-text"><span onclick="location.href='<?php echo base_url();?>main/logout'">Logout</span></p>
      </a>

      <div id="faq" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="questionOne">
            <h5 class="panel-title">
            <a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
            See More..
            </a>
            </h5>
          </div>
          <div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
          <div class="panel-body">


            <strong>Address: </strong><em><?php echo $user[0]->address; ?></em>
            <br><strong>Contact Number: </strong><em><?php echo $user[0]->contact_number; ?></em>
            <br><strong>Section/Unit: </strong><em><?php echo $user[0]->section_unit; ?></em>
            <br><strong>Sex: </strong><em><?php echo $user[0]->sex; ?></em>
            <button id="changepass" type="button" style="float: right; " class="btn btn-info btn-xs">Change Password</button>
          </div>
          </div>
        </div>

        </div>
    </div>

    <div class="panel-body" id="editpassword" style="display: none;">
          
      <form method="POST">
          <input type="hidden" id="user_id" name="ttid" value="<?php echo $user[0]->user_id; ?>">
                        
          <div class="form-group">
            <label>Current Password</label>
            <input class="form-control" name="currpass" placeholder="" type="password" value="">
          </div>
          
          
          <div class="form-group">
            <label>New Password</label>
            <input class="form-control" name="newpass" placeholder="" type="password" value="">
          </div>

          <div class="form-group">
            <label>Confirm New Password</label>
            <input class="form-control" name="confirmnewpass" placeholder="" type="password" value="">
          </div>
         
        
          <div style="text-align:  right;">
            <button type="button" id="cancelupdatepassword" class="btn btn-default">Close</button>
            <button type="button" id="updatepassword" class="btn btn-primary save">Update</button>
          </div>
        </form>
      
    </div>

    <div class="nav-list">
      <div class="list-group col-md-12 text-center">
        <!-- <label>Manage</label> id="create" style="width: 100%;" class="btn btn-info--> 
        
        <!--<button type="button" class="btn btn-warning btn-lg" style="width: 100%;" data-toggle="modal" data-target="#myModal">Add New Record</button> -->
        
        <!-- <a id="tspots" class="list-group-item">Tourist Spots</a> -->
        <!-- <a id="routes" class="list-group-item">Routes</a> -->
      </div>
      <div class="list-group" style="">
        <label>Open Evaluations</label>
        <!--<a id="farms" class="list-group-item active">Equipment</a> -->
        
        <a id="openforms" class="list-group-item active" style="cursor: pointer;">Forms</a>
        

      </div>

      <div class="list-group" style="">
        <label>History</label>
        <!--<a id="farms" class="list-group-item active">Equipment</a> -->
        
        <a id="closedforms" class="list-group-item " style="cursor: pointer;">Submitted Evaluations</a>
        

      </div>


    </div>
    
  </div>

<?php 
  if (isset($user)) {
    // var_dump($user);
  }

 ?>
 <input type="hidden" name="user_id" value="<?php echo $user[0]->user_id; ?>">
  <div id="reloadDiv" class="col-md-10" >
    
  </div><div id="wait" style="display:none;width:100px;height:100px;position:absolute;top:50%;left:50%;"><img src='<?= base_url('loading.gif') ?>' width="200" height="200" /></div>
  <!-- https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif 
    https://media1.tenor.com/images/8ac12962c05648c55ca85771f4a69b2d/tenor.gif?itemid=9212724-->
</div>

<div class="alert alertt alerttt" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>

  <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

<script type="text/javascript">
  $('#changepass').on('click',function(){
    $("#editpassword").show();
    
  });

  $('#cancelupdatepassword').on('click',function(){
    $("#editpassword").hide();

    
  });
</script>