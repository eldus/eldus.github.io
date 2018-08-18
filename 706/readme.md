## 706 Google + Signin
2017.06.09 [HTML, CSS, JS]

https://developers.google.com/identity/sign-in/web/sign-in
https://developers.google.com/identity/sign-in/web/devconsole-project


https://console.developers.google.com/project/_/apiui/apis/library

From the project drop-down, select an existing project
MyWebProject > mywebproject-174806

https://console.developers.google.com/apis/library?project=mywebproject-174806

Credentials, then select the OAuth consent screen
Product name shown to user: G O Authentication 2.0

Credentials >

Create client ID > Web application
Name = Web client 170725

Authorized JavaScript origins =
https://io.github.eldus.com
http://localhost

Create...

Here is your client ID =
520253257294-n2v5ofr4trponpo24se6d8ufngs466q5.apps.googleusercontent.com

A more fancy login button

https://developers.google.com/identity/sign-in/web/build-button

https://www.youtube.com/watch?v=zZt8SFivjps

Polymer: Interacting with Google Services using nothing but HTML
https://youtu.be/eORqFaf_QzM?t=419

sudo npm install -g polymer-cli
mkdir myapp
cd myapp

polymer init
> starter-kit option
or
polymer init starter-kit

polymer serve
polymer build
polymer server build/bundled (the standard version)
polymer server build/unbundled (more advanced)

https://auth0.com/blog/build-your-first-app-with-polymer-and-web-components/

Draw simple circle on a map...

https://developers.google.com/maps/documentation/javascript/examples/circle-simple


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Circles</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // This example creates circles on the map, representing populations in North
      // America.

      // First, create an object containing LatLng and population for each city.
      var citymap = {
        chicago: {
          center: {lat: 41.878, lng: -87.629},
          population: 2714856
        },
        newyork: {
          center: {lat: 40.714, lng: -74.005},
          population: 8405837
        },
        losangeles: {
          center: {lat: 34.052, lng: -118.243},
          population: 3857799
        },
        vancouver: {
          center: {lat: 49.25, lng: -123.1},
          population: 603502
        }
      };

      function initMap() {
        // Create the map.
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: 37.090, lng: -95.712},
          mapTypeId: 'terrain'
        });

        // Construct the circle for each value in citymap.
        // Note: We scale the area of the circle based on the population.
        for (var city in citymap) {
          // Add the circle for this city to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: citymap[city].center,
            radius: Math.sqrt(citymap[city].population) * 100
          });
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
  </body>
</html>