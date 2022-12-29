
  <h2 class="text-center">Categories and Types <button type="button" data-toggle="modal" data-target="#myCatModal" class="addnew btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></button></h2>
     
  <?php 
  foreach ($catype as $key) {
    ?>

    <style>.accordion:after {content: '\02795'; font-size:  13px; color: #777;float: right;margin-left: 5px} .accordion.active:after {content: '\2796'}</style>
    
    <button onmouseover="this.style.backgroundColor ='#ccc'" onmouseout="this.style.backgroundColor = '#eee'" class="accordion" style="background-color: #eee; color: #444;cursor: pointer;padding: 18px;width: 100%;text-align: left;border: none;outline: none;transition: 0.4s; "><?php echo $key['cat']->category_name; ?></button>
    
    <div class="panell" style="padding: 0 18px;background-color: #eee;overflow: hidden;display: none; border: 1px solid #ccc; border-top: none;">
     
            <ul class="list-group">
             <?php 
        $count = 1;
          foreach ($key['type'] as $keyy) {
            ?>
              <form style="display: none;" method="POST" id="<?php echo $keyy->est_type_id."_type"; ?>">
                <br>
                <div class="form-group">
                  <input class="form-control" name="<?php echo "type ".$keyy->est_type_id; ?>" placeholder="<?php echo $keyy->est_type; ?>" type="text" value="<?php echo $keyy->est_type; ?>">
                </div>
               
                <div style="text-align:  right;">
                  <button type="button" class="btn btn-default canceledit">Close</button>
                          <button type="button" id="updateType" class="btn btn-primary saveedit">
                          Save</button>
                </div>
              </form> 

              <li class="list-group-item" style="display: block;" id="<?php echo $keyy->est_type_id; ?>">
                  <?php echo $count.". "; ?> <?php echo $keyy->est_type; ?>
                  <span style="float: right;" class="glyphicon glyphicon-trash deletetype"></span>    
                  <span style="float: right;" class="glyphicon glyphicon-pencil edittype" ></span>
              </li>
            <?php
            $count++;
          }
       ?>
         </ul>
    </div>

    <?php
  }

 ?>
<div class="modal fade" id="myCatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Create New</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTabb" aria-controls="uploadTab" role="tab" data-toggle="tab">New Category</a>

                        </li>
                        <li role="presentation"><a href="#browseTabb" aria-controls="browseTab" role="tab" data-toggle="tab">New Type under Category</a>

                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTabb">
                          <form method="POST">
                            <br>
                            
                              <p class="alertt" style="display: none;">
                                Please enter new category name.
                              </p>
                          
                            <div class="form-group">
                              <label>Category Name</label>
                              <input class="form-control" name="catname1" placeholder="Category Name" type="text" value="" required="">
                            </div>
                           
                            <div style="text-align:  right;">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" id="createcat" class="btn btn-primary savenewcat">Add</button>
                            </div>
                          </form> 
                        </div>

                        <div role="tabpanel" class="tab-pane" id="browseTabb">
                          <form method="POST">
                            <br>
                            <!-- <?php var_dump($catype); ?> -->
                            <div class="form-group">
                              <label for="exampleFormControlSelect2">Select Category</label>
                              <select name="province1" class="form-control" id="exampleFormControlSelect2">
                                <!-- <option>Province</option> -->
                                <?php 

                                  foreach ($catype as $key) {
                                    ?>
                                      <option value="<?php echo $key['cat']->category_id; ?>"><?php echo $key['cat']->category_name; ?></option>

                                  <?php
                                }
                                    ?>
                                
                              </select>
                            </div>

                           <div class="form-group">
                              <label>Name of New Type</label>
                              <input class="form-control" name="newtypename1" placeholder="Type Name" type="text" value="">
                            </div>
                            
                            <div style="text-align:  right;">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" id="createfarm" class="btn btn-primary savenewtype">Add</button>
                            </div>
                          </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="profile"></div>

<div class="alert" style="text-align: center; color: white; position:fixed;top:50%;left:50%;width:500px;height:50px;margin-left:-250px;margin-top:-25px;opacity: 0.7; background-color: gray;display: none;"></div>


  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for ( i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function(){
        this.classList.toggle("active");

        var panell = this.nextElementSibling;

        if(panell.style.display === "block"){
          panell.style.display = "none";
        } else {
          panell.style.display = "block";
        }
      });
    }
      
    $(".type").on('click', function(){
      console.log($(this).attr('id'));
      $("#profile").load('http://'+window.location.host+'/rstl_pm/tourismfarmcategory/oneCategory');
    });

    $(".edittype").on('click', function(){
      var typeid = $(this).parent().attr("id");
       $(this).parent().hide();
       $('#'+typeid+'_type').show();
      
    })

    $(".canceledit").on('click', function(){
      var typeid = $(this).parent().parent().attr("id");
      const splitString = typeid.split("_")[0];
       $(this).parent().parent().hide();
       $('#'+splitString+'').show();
      
    })

    $(".savenewtype").on('click',function(){
       var typename = $("input[name=newtypename1").val();

       console.log(typename);
    })

    $(".savenewcat").on('click',function(){
      var catname = $("input[name=catname1]").val();
      
      if (catname == ""){
        $(".alertt").show();
      } else {
        console.log(catname);
        $.ajax({
          url: 'http://'+window.location.host+'/rstl_pm/tourismfarmcategory/addNewCategory',
          type: "POST",
          data: {"data":catname},
          success: function(data){
            console.log(data);
            $("#myCatModal").modal('hide');
            $("#reloadDiv").load('http://'+window.location.host+'/rstl_pm/tourismfarmcategory/tourCateg');
            var fade_in = function() {
            // $(".alert").fadeOut().empty();
            $('.alert').text( "Successfully updated activity." );
            $(".alert").show();
          }

          var fade_out = function() {
            $(".alert").fadeOut().empty();
            // $(".alert").show();
          }
          setTimeout(fade_in,500);
          setTimeout(fade_out, 3000);

          } ,
        error: function(){

          $("#myCatModal").modal('hide');
          
          var fade_in = function() {
            // $(".alert").fadeOut().empty();
            $('.alert').text( "Unable to add new category." );
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
      }
    })

    

    </script>