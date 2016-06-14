<!DOCTYPE html>
<html> 
<head> 
   <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
   <title>Peta</title> 
   <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
   <style type="text/css">
   #map{
    width: 100%;
    float: left;
    position: static;
    z-index:-90;
    height: 400px;
    margin-bottom: 80px;    
    border-top:2px solid black;  
    border-bottom:2px solid black;  
   }
   li{
    list-style-type: none;
   }

   .adp-stepicon{
    z-index: -90;
   }
   </style>
</head> 
<body style="font-family: Arial; font-size: 12px;">

 <div class='row'>
 <ul>
    <li><div id="panel"></div> </li>
    <li><div id="map"></div> </li>
 </ul>
 	  
</div>
       
    
   <script type="text/javascript"> 

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map = new google.maps.Map(document.getElementById('map'), {
       zoom:10,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel'));

     var request = {
       origin: '<?=$asal;?>', 
       destination: '<?=$tujuan;?>',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script>

   
</body> 
</html>