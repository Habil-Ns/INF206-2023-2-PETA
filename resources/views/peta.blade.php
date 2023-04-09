<!DOCTYPE html>
<html>
  <head>
    <title>Peta Banda Aceh</title>
    <link rel="stylesheet" href="peta.css">
  </head>
  <body>
    <h1></h1>
    <img src="{{asset ('image/map.png')}}" alt="Peta Banda Aceh" width="900" height="500">
    <p>Peta Banda Aceh</p>
    <div id="map"></div>
    <a href="https://www.google.com/maps?q=Banda+Aceh">Lihat di Google Maps</a>
    <script>
      function initMap() {
        // koordinat Banda Aceh
        var bandaAceh = {lat: 5.5560, lng: 95.3227};

        // buat peta dan tampilkan di elemen dengan id "map"
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: bandaAceh
        });

        // tambahkan marker di Banda Aceh
        var marker = new google.maps.Marker({
          position: bandaAceh,
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap"
    async defer></script>
  </body>
</html>
