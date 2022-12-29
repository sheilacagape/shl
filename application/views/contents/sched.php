<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>

<?php 
 //var_dump($feeds);

 ?>

 <div class="row col-md-12">
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
  <h4 class="text-center">Regional Office No. X</h4>
  <hr>  
  
  </div>
<div class="row col-md-12">
  <h2>Maintenance Schedule</h2>
  <p>Legend: </p>                      
  <!--<a href="#" class="previous round">&#8249;</a>
  <a href="#" class="next round">&#8250;</a> -->
  <a href="#" class="round">X</a> Maintenance Completed
  <br>
  <a href="#" class="round">/</a> Scheduled Maintenance
<br><br>
  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead style="background-color: lightblue">
      <tr>
        <th>AC Code</th>
        <th>Jan <?php echo $year; ?></th>
        <th>Fen <?php echo $year; ?></th>
        <th>Mar <?php echo $year; ?></th>
        <th>Apr <?php echo $year; ?></th>
        <th>May <?php echo $year; ?></th>
        <th>Jun <?php echo $year; ?></th>
        <th>Jul <?php echo $year; ?></th>
        <th>Aug <?php echo $year; ?></th>
        <th>Sep <?php echo $year; ?></th>
        <th>Oct <?php echo $year; ?></th>
        <th>Nov <?php echo $year; ?></th>
        <th>Dec <?php echo $year; ?></th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($feeds as $key) {
          # code...
        ?>
      <tr>
        <td><?php echo $key->code_no; ?></td>
        <td class="text-center">
        <?php if ($key->sched1 == "Jan ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>'; } 
          elseif ($key->sched2 == "Jan ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Jan ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Jan ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Jan ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Feb ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Feb ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Feb ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Feb ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Feb ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Mar ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Mar ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Mar ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Mar ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Mar ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Apr ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Apr ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Apr ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Apr ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Apr ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "May ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "May ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "May ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "May ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "May ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Jun ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Jun ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Jun ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Jun ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Jun ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Jul ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Jul ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Jul ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Jul ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Jul ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Aug ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Aug ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Aug ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Aug ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Aug ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Sep ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Sep ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Sep ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Sep ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Sep ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Oct ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Oct ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Oct ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Oct ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Oct ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Nov ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Nov ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Nov ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Nov ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Nov ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
        <td class="text-center"><?php if ($key->sched1 == "Dec ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } elseif ($key->sched2 == "Dec ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched3 == "Dec ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->sched4 == "Dec ".$year) {
          echo '<div class="record" id="'.$key->acid.'">/</div>';
        } elseif ($key->lastsched == "Dec ".$year) {
          echo '<div class="record" id="'.$key->acid.'">X</div>';
        } else {
          echo "";
        } ?> </td>
      </tr>
      <?php 
    } ?>
    </tbody>
  </table>
</div>

    <script>
      
      
       $('.record').click(function(){
        var id = $(this).attr('id');
          //console.log(id);
          //console.log(window.location.hostname);
           $("#reloadDiv").load("http://"+window.location.hostname+"/rstl_pm/tspot/getOneTspot",{id:id});
          // alert(id);
        });
    </script>


