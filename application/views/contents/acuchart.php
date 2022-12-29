 <div class="row col-md-12 text-center " style="text-align:center"> 
  <div class="row col-md-12">
  <h3 class="text-center">DEPARTMENT OF SCIENCE AND TECHNOLOGY</h3>
  <h4 class="text-center">Regional Office No. X</h4>
  <hr>  
  
  </div>
 </div>

 <div class="row col-md-12" style = "text-align:center;">
  <div class="row col-md-8" style = "text-align:center;">
		<canvas  id="myChart" style=" width:100%;max-width:1000px"></canvas>
	 </div>
   
   <div class="row col-md-4" style = "text-align:left;">
    <br><br><br><br>
    <h3>Legend: </h3>
    <table class="table">
      
    
    <?php 
      if(isset($activeAC[0])){
        ?>
        <tr>
          <td><span class=" btn btn-default  badge"  style="background-color: #1e7145; color:#1e7145;">.</span></td>
          <td><?php echo "Working: "?></td>
          <td> <?php echo $activeAC[0]->freq; ?></td>
          <td> <?php if(isset($activeAC[1])){echo number_format(100*($activeAC[0]->freq/($activeAC[1]->freq+$activeAC[0]->freq)),2)."%";}else{echo "100%";} ?></td>
        </tr>
        <?php 
      }
       
       if(isset($activeAC[1])){
        ?>
        <tr>
          <td><span class=" btn btn-default  badge"  style="background-color: #b91d47; color:#b91d47;">.</span></td>
          <td><?php echo "Non-working: "?></td>
          <td> <?php echo $activeAC[1]->freq; ?></td>
          <td> <?php echo number_format(100*($activeAC[1]->freq/($activeAC[1]->freq+$activeAC[0]->freq)),2)."%"; ?></td>
        </tr>
        <?php 
      } else {
         ?>
         <tr>
          <td><span class=" btn btn-default  badge"  style="background-color: #b91d47; color:#b91d47;">.</span></td>
          <td><?php echo "Non-working: "; ?></td>
          <td> <?php echo "0"; ?></td>
          <td> <?php echo "0%"; ?></td>
        </tr>
        <?php  
      }
    ?>
    </table>
   </div>
 </div>


<script>
 //chart

    $(document).ready(function(){
      $.ajax({
        url: "http://"+window.location.host+"/rstl_pm/tspot/getActiveAC",
        method: "GET",
        success: function(data) {
          console.log(data);
          data2 = JSON.parse(data);
          
          var xValues = new Array();
          var yValues = new Array();
          var barColors = [
            "#1e7145",
            "#b91d47"
            
          ];
        
         if (data2.length > 1) {
            for (var i = 0; i < data2.length; i++) {
              xValues.push(data2[i].equip_stat);
              yValues.push(data2[i].freq);
            }
         } else {
            for (var i = 0; i < data2.length; i++) {
              xValues.push(data2[i].equip_stat);
              yValues.push(data2[i].freq);
            }

            if (data2[0].equip_stat = "Working") {
              xValues.push("Non-working");
              yValues.push("0"); 
            } else {
              xValues.push("Working");
              yValues.push("0"); 
            }
         }
          
          
          


          new Chart("myChart", {
            type: "pie",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
              title: {
                display: true,
                text: "Working VS Non-working ACUs"
              }
            }
          });
        },
        error: function(data) {
          console.log(data);


        }
      });
    });

    
  
    </script>
