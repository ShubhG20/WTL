<?php


require_once 'header.php';

echo"<br><hr><marquee> <h1>ABOUT US<h1> </marquee><hr> <br>"



?>
<!--
<!doctype html>
<html ng-app>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  </head>
  <body>
    <div>
      <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h1>Hello {{yourName}}!</h1>
    </div>
  </body>
</html>
-->

<html>
<head>
    <title>ABOUT US</title>
	</head>
<body>

  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=put_your_key_here"></script>
    <script type="text/javascript">
        var app = angular.module('MyApp', [])
        app.controller('MyController', function ($scope) {
            $scope.Markers = [
            {
                "title": 'BBQ House- Deccan',
                "lat": '18.520493',
                "lng": '73.8414',
                "description": 'The legacy restaurant in the heart of Pune city.'
            },
            {
                "title": 'BBQ House-Wakad',
                "lat": '18.6028',
                "lng": '73.75',
                "description": 'Our most lively branch close to the Mumbai-Pune highway'
            },
            {
                "title": 'BBQ House- Vimannagar',
                "lat": '18.556',
                "lng": '73.899',
                "description": 'New branch opened near to the Pune airport'
            }
           ];
 
            //Setting the Map options.
            $scope.MapOptions = {
                center: new google.maps.LatLng($scope.Markers[0].lat, $scope.Markers[0].lng),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
 
            //Initializing the InfoWindow, Map and LatLngBounds objects.
            $scope.InfoWindow = new google.maps.InfoWindow();
            $scope.Latlngbounds = new google.maps.LatLngBounds();
            $scope.Map = new google.maps.Map(document.getElementById("dvMap"), $scope.MapOptions);
 
            //Looping through the Array and adding Markers.
            for (var i = 0; i < $scope.Markers.length; i++) {
                var data = $scope.Markers[i];
                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
 
                //Initializing the Marker object.
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: $scope.Map,
                    title: data.title
                });
 
                //Adding InfoWindow to the Marker.
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        $scope.InfoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                        $scope.InfoWindow.open($scope.Map, marker);
                    });
                })(marker, data);
 
                //Plotting the Marker on the Map.
                $scope.Latlngbounds.extend(marker.position);
            }
 
            //Adjusting the Map for best display.
            $scope.Map.setCenter($scope.Latlngbounds.getCenter());
            $scope.Map.fitBounds($scope.Latlngbounds);
        });
    </script>
    <div ng-app="MyApp" ng-controller="MyController" align="center">
         
		 
		 <div id="aboutText">
		 
	<p style={font-family:bookman;}>	 <h1>BBQ House</h1> was founded in 2006 by one of our Promoters. We currently own and operate 138 outlets in India, 5 outlets in UAE, 1 outlet in Malaysia and 1 outlet in Oman.

One of the leading casual dining chains in India, Barbeque Nation pioneered the concept of “over the table barbeque” live grills embedded in dining tables – allowing guests to grill their own barbecue’s right at their tables.

Indian cuisine is a natural part of the diet in the markets in which the Barbeque Nation Restaurants operate. We continue to offer new menu options, both vegetarian and non-vegetarian, largely based on Indian cuisine and use seasonal customer preferences to introduce new dishes. We also run popular food festivals at our Barbeque Nation Restaurants, thereby offering our customers a range of Indian and international cuisines.

Our fixed price ‘all you can eat’ concept at our Barbeque Nation Restaurants offers our customers a varying spread of consistently delicious food at a value-oriented price in a pleasant and casual dining environment. We believe that barbeque cuisine is distinctively attractive as compared with other dining options due to its DIY and cooked-at-the-table nature and the flexibility and fun of mixing and matching a wide variety of meats, vegetables, sauces and condiments to create dishes according to each diner’s individual tastes and preferences. In addition, fixed price dining is very popular amongst relatively larger groups, due to customers’ perception of value for money and the comfort of certainty over the bill amount irrespective of varying individual appetites and consumption

Our Barbeque Nation Restaurants typically offer customers at least five vegetarian and five non-vegetarian largely pre-cooked appetisers they can season and barbeque on a grill embedded in their table, an all-you-can-eat main course buffet and a selection of desserts.

Our core values prioritise being customer-focused to provide excellent products and service and employee-focused by maintaining a superior quality work environment. Our Company was ranked 13th among best companies to work for in India across all categories by Economic Times “Great Places to Work” survey for 2019 conducted by Great Places to Work Institute. Our Company was also voted among the top ten employers within the Indian retail industry for 2019 by Great Places to Work and 14th among best large workplaces in Asia by Great Places to Work Institute.
		 </p>
		 </div>
		 
		 <div id="dvMap"  style="width: 400px; height: 400px">
         </div>
    </div>

	
	
</body>
</html>