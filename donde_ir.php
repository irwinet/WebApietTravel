<?php include('header.php'); ?>	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <div class="row">
			    	<div class="col-lg-9">
			    		<h1 class="display-3">Donde Ir?</h1>
			    	</div>
			    	<div class="social col-lg-3">
			    		<ul class="list-unstyled list-inline">
			    			<li class="list-inline-item">
			    				<a href="#"><img src="img/social/ico-facebook.png" alt="Facebook"></a>
			    			</li>
			    			<li class="list-inline-item">
			    				<a href="#"><img src="img/social/ico-twitter.png" alt="Twitter"></a>
			    			</li>
			    			<li class="list-inline-item">
			    				<a href="#"><img src="img/social/ico-google.png" alt="Google"></a>
			    			</li>
			    		</ul>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-md-12">
			<nav aria-label="breadcrumb" role="navigation">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="http://localhost:8080/webapiettravel/index.php">Inicio</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Donde Ir?</li>
			  </ol>
			</nav>
		</div>
		<div class="col-md-12">
			<div class="row">
			  <div class="col-4">
			    <div class="list-group" id="list-tab" role="tablist">
			      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><span class="icon icon-file-text2"></span> Datos Útiles</a>
			      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Patrimonio Cultural</a>
			      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Atractivos Dentro de la Ciudad</a>
			      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Atratacticos Fuera de la Ciudad</a>
			    </div>
			  </div>
			  <div class="col-8">
			    <div class="tab-content" id="nav-tabContent">
			      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
			      	<h1>Apurímac <span class="badge badge-primary">Corazón Andino</span></h1>
					<p class="text-justify">
						<strong>Apurímac</strong> reúne aguas termales, bosques cordilleranos, lagunas, flora, fauna, un enorme nevado (Ampay) y el profundo Cañón Apurímac, límite natural con el Cusco y escenario de deportes de aventura. Las huellas de un pasado inca y colonial se reúnen dentro de la arquitectura mestiza y las permanentes fiestas costumbristas alrededor de las distintas ciudades de Abancay, Andahuaylas y entre otras.
					</p>
					<p class="text-justify">
						<strong>Ubicación:</strong> Sierra sur del Perú, geografía abrupta, formada por valles estrechos y profundos, con impresionantes abismos, frías mesetas y altas cumbres.
					</p>
					<p class="text-justify">
						<strong>Extensión:</strong> 20.891 Km2
					</p>
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/tgydgeyBY-w" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
			      </div>

			      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
			      	<h1>Arqueologia</h1>
			      </div>

			      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
			      	<h1>Plaza de Armas</h1>
			      </div>

			      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
			      	<h1>Santuario Nacional del Ampay</h1>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function (){
		$('.nav-item').hide();
	});
</script>
<?php include('footer.php'); ?>