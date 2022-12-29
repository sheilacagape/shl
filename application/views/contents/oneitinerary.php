<h2 class="text-center">
Itinerary for 
<?php echo $allest[0]["est"][0]->itinerary_name; ?> <br>
<!-- <small>Created by: <?php echo $owner[0]->lastname.", ".$owner[0]->firstname; ?></small> -->
</h2>

<div class="panel panel-primary">
  <div class="panel-heading text-center">Details</div>
  <div class="panel-body">
    <!-- <h4>Establishments</h4> -->
    <?php 
        for ($i=0; $i < count($allest); $i++) { 
           ?>
            <h3><?php echo $allest[$i]['est'][0]->est_name; ?></h3>

            <h4>Accommodations</h4> 
            <ul>
            <?php 
            if (count($allest[$i]['acc'])>0) {
              foreach ($allest[$i]['acc'] as $key) {
                ?>
                  <li><?php echo $key->accommodation_name; ?><small> - <?php echo $key->description; ?></small></li>

                <?php
              }
            } else{
              echo "<li style='color:red;'>No Accommodation/s added for this establishment.</li>";
            }
              
             ?>
             </ul>

             <h4>Activities</h4>
              <ul>
              <?php 
              if (count($allest[$i]['act'])>0) {
                foreach ($allest[$i]['act'] as $key) {
                  ?>
                    <li><?php echo $key->name; ?><small> - <?php echo $key->description; ?></small></li>

                  <?php
                }
              } else{
                echo "<li style='color:red;'>No Activity/s added for this establishment.</li>";
              }
                
               ?>
              </ul>

           <?php
        }

     ?>

  	

  	 
  	  
  </div>
</div>
<!-- <?php 
	var_dump($owner);
	echo "<br>";
	var_dump($itiaccom);
	echo "<br>";
	var_dump($itiact);
	echo "<br>";
	var_dump($sidetrip);
	echo "<br>";


 ?> -->