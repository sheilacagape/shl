<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 600px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
      <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

    <script>
      // let data
      // function getsidetrips(){
      //    $.ajax({
      //     url: "http://localhost/farmhunt/main/getO",
      //     type: "GET",
      //     data: {"data":"delact"},
      //     success: function(data){
      //       return JSON.parse(data);
      //     }
      //   })
      // }

      function getsidetrips() {
        return $.ajax({
            url: "http://"+window.location.hostname+"/farmhunt/main/getO"
        });
      }
      var infowindow = null;

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 8.679108, lng: 123.330999};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru});
  // The marker, positioned at Uluru

xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","http://"+window.location.hostname+"/farmhunt/main/getTspotswAdd",false);
xmlhttp.send();

var test = JSON.parse(xmlhttp.responseText);
var m = new Array();
var w = new Array();

  // m.push(marker);
  // var infowindow = new google.maps.InfoWindow({
  //   content: test[i].sidetrip_name
  // });
  // w.push(infowindow);
  // //  marker.addListener('click', function() {
  // //   infowindow.open(map, marker);
  // // });
  // google.maps.event.addListener(marker, 'click', function() {
  //   marker.info.open(map, this);
// });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < test.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(Number(test[i].latitude),Number(test[i].longitude)),
        map: map
        
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(test[i].sidetrip_name)
          infowindow.open(map,this);
        }
      })(marker, i));
     
    }          
    xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","http://"+window.location.hostname+"/farmhunt/main/getFspotswAdd",false);
    xmlhttp.send();

    var farmtest = JSON.parse(xmlhttp.responseText);
        var pinColor = "blue";
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor);
 
     var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < farmtest.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(Number(farmtest[i].latitude),Number(farmtest[i].longitude)),
        map: map,
        icon: {
            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
          }
        
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(farmtest[i].farm_name)
          infowindow.open(map,this);
        }
      })(marker, i));
     
    }          
}



  

// console.log(m);
// console.log(w);
// for (var i = 0; i<test.length; i++) {

//    m[i].addListener('click', function() {

//     w[i].open(map, infowindow);
//     // console.log();
//   });
// }
  // var marker = new google.maps.Marker({position: uluru, map: map});



    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz8wUn0FzHnX2olcx3IXSOhvKXIp-Za4o&callback=initMap">

    </script> 
  </body>
</html>