<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta content="template language" name="keywords">
    <meta content="marchukilya@gmail.com" name="author">
    <meta content="" name="description">
    <link href="css/main.css" rel="stylesheet">
    <link href="favicon.png" rel="shortcut icon" type="image/png">
    <title>Lockroom - Контакты</title>
  </head>
  <body></body>
  <div class="container">
    <div class="jumbotron text-center">
      <h1>
        Lockroom
      </h1>
      <p class="lead">
        Lockroom — это квесты "выберись из комнаты" в реальной жизни. Здесь все как в компьютерной игре, только по-настоящему: можно трогать и брать в руки предметы обстановки, открывать шкафы и двери.
      </p>
      <p>
        Для участия нужно собрать команду от 2 до 4 человек и записаться на игру
      </p>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <ul class="nav nav-pills nav-justified">
          <li>
            <a class="btn btn-default" href="index.php">Квесты</a>
          </li>
          <li>
            <a class="btn btn-default" href="r.php">О проекте</a>
          </li>
          <li>
            <a class="btn btn-default" href="k.php">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <div id="map1" style="width:100%; height:500px;"></div>
        <script type="text/javascript">
          var geocoder,
              map,
              address = 'Москва, Малая Тульская улица д.2/1 к5';
          
          function init_map() {
            geocoder = new google.maps.Geocoder();
            geocoder.geocode( { 'address': address}, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: address
                });
          
                infowindow.open(map,marker);
          
                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                });
          
              } else alert('Geocode was not successful for the following reason: ' + status);
            });
            var infowindow = new google.maps.InfoWindow({ content: 
            '<div>'+
              '<p>8 916 674 93 15</p>'+
              '<p>hello@lockroom.ru</p>'+
              '<p>Метро Тульская</p>'+
              '<p>Малая Тульская ул. д.2/1 к5</p>'+
            '</div>' }),
                myOptions = {
                  zoom: 15,
                  scrollwheel: false, //disableDefaultUI: true,
                  zoomControl: true,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
            map = new google.maps.Map(document.getElementById("map1"), myOptions);
          }
          
          google.maps.event.addDomListener(window, "load", init_map);
        </script>
      </div>
    </div>
    <hr>
    <div class="footer">
      <p class="pull-left">
        LOCKROOM
      </p>
      <p class="pull-right">
        2014 год
      </p>
    </div>
    <!-- Yandex.Metrika informer --><!-- /Yandex.Metrika informer --><!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (d, w, c) {
      (w[c] = w[c] || []).push(function() {
          try {
              w.yaCounter25221941 = new Ya.Metrika({id:25221941,
                      webvisor:true,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true});
          } catch(e) { }
      });
      
      var n = d.getElementsByTagName("script")[0],
          s = d.createElement("script"),
          f = function () { n.parentNode.insertBefore(s, n); };
      s.type = "text/javascript";
      s.async = true;
      s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
      
      if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
      } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
      <div>
        <img alt="" src="//mc.yandex.ru/watch/25221941" style="position:absolute; left:-9999px;">
      </div>
    </noscript><!-- /Yandex.Metrika counter -->
  </div>
</html>
