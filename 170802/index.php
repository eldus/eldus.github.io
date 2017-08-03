<?php
// set location
$address = "28+Jalan+Bukit+Merah+Singapore";

//set map api url
$url = "http://maps.google.com/maps/api/geocode/json?address=$address";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->results[0]->geometry->location->lat;
$lng = $json->results[0]->geometry->location->lng;
$pid = $json->results[0]->place_id;
$add = $json->results[0]->formatted_address;
echo "Latitude: " . $lat . ", Longitude: " . $lng;
echo "<br>";
echo "place_id: " . $pid;
echo "<br>";
echo "formatted_address: " . $add;
// JSON format
/*
{
   "results" : [
        {
            "geometry" : {
                "location" : {
                    "lat" : 1.2862401,
                    "lng" : 103.8095033
                },
                "location_type" : "ROOFTOP",
            },
            "formatted_address" : "28 Jalan Bukit Merah, Singapore",
            "place_id" : "ChIJQwr_js0b2jERVl5k8d6o-x8"
        }
   ],
   "status" : "OK"
}
*/
?>