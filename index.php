<!DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  </head>
<body onload="getLocation()">

<p id="demo"></p>

<script>
if (navigator.geolocation) {        // test whether device supports geolocation!
      navigator.geolocation.watchPosition (gotLocation, errLocation, {maximumAge: 30000});
}

function gotLocation (position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      var accuracy = position.coords.accuracy;
      var timestamp = position.timestamp;
}

function errLocation (error) {
      var errCode = error.code;
      var errMess = error.message;
}
</script>

</body>
</html>
