    <div class="footer-top"></div>
    <footer class="container-fluid">
      <div class="row">
      	<div class="col-sm-6 col-md-4 col-lg-4">
      		<h4>Destinos</h4>
      		<hr />
      		<ul>
      			<li><a href="#">Abancay</a></a></li>
      			<li><a href="#">Chacoche</a></li>
      			<li><a href="#">Circa</a></li>
      			<li><a href="#">Curahuasi</a></li>
      			<li><a href="#">Huanipaca</a></li>
      			<li><a href="#">Lambrama</a></li>
      			<li><a href="#">Pichirhua</a></li>
      			<li><a href="#">San Pedro de Cachora</a></li>
      			<li><a href="#">Tamburco</a></li>
      		</ul>
      	</div>
      	<div class="col-sm-6 col-md-4 col-lg-4">
      		<h4>Actividades</h4>
      		<hr />
      		<ul>
      			<li><a href="#">Aventura</a></li>
      			<li><a href="#">Naturaleza</a></li>
      			<li><a href="#">Historia y Cultura</a></li>
      			<li><a href="#">Descanso y relax</a></li>
      			<li><a href="#">Entretenimiento y compras</a></li>
      			<li><a href="#">Turismo vivencial</a></li>
      		</ul>
      	</div>
      	<div class="col-sm-6 col-md-4 col-lg-4">
      		<h4>Información Útil</h4>
      		<hr />
      		<ul>
      			<li><a href="#">Clima y pronóstico del tiempo</a></li>
      			<li><a href="#">ApietTravel</a></li>
      			<li><a href="#">Áreas Naturales Protegidas</a></li>
      			<li><a href="#">Turismo Educativo</a></li>
      			<li><a href="#">Turismo Rural Comunitario</a></li>
      			<li><a href="#">Mapa del sitio</a></li>
      		</ul>
      	</div>
      </div>
      <div class="row">
      	<div class="col-center-block">
      		<span class="terminos">apiettravelperu@gmail.com</span>
      		<strong><a href="#" class="terminos">Términos y Condiciones</a></strong>
      	</div>
      </div>
    </footer>

    <!-- JQUERY - POPPER -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <script>
      var map;
      function initMap(){
        var marcadores = [
          ['Plaza Micaela Bastidas', -13.6360181,-72.8747562], 
          ['Plaza de Armas', -13.6373657,-72.8787419],
          ['Parque Centenario', -13.6373553,-72.8804586],
          ['Parque el Olivo', -13.6351553,-72.8837684],
          ['Parque Señor de la Caida', -13.6326044,-72.8811926],
          ['Parque la Victoria', -13.631103,-72.8766838],
          ['Parque del Periodista', -13.6379219,-72.8834027],
          ['Parque Daniel A. Carrión', -13.6407931,-72.8814353]
        ];

        map=new google.maps.Map(document.getElementById('map'),
        {
          center:{lat:-13.6360181,lng:-72.8747562},
          zoom:15
        });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < marcadores.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
            map: map
          });
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(marcadores[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFn1_ye7In3khQ8Q7eNIKRGT5y7ab75gA&callback=initMap" async defer></script>
  </body>
</html>