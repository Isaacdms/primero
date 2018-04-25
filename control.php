<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" />
	<title>Control</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <script src="js/materialize.js"></script>
  <script src="js/materialize.min.js"></script> 

</head>
<body>
	
	<nav>
  <div class="nav-wrapper red darken-4">
  </div>
  </nav>
  	
  </div>
  <br>

<div class="container">
  <div class="row">
  	<div class="col s12">
  		<center><img src="images/Logo Iujo.gif" width="300" class="responsive-img"></center>
  		<div class="col s12">
  			<div class="card grey lighten-2">
  				<div class="card-content black-text">
  					<span class="card-title center"><h2>Aspirante</h2></span>
  					<p class="center">Seleccionar los aspiantes que van a la pre-inscripción</p>
  				</div>
  					<div class="card-action">
  						<center>
  						<a class="waves-effect waves-light btn">Listado Preuniversitario</a>
  						<a class="waves-effect waves-light btn">Asistencia Preuniversitario</a>
  						<a class="waves-effect waves-light btn">Aspirante</a>
  						</center>
  					</div>
  			</div>
  			<br>
  		</div>
  		<div class="col s12 m6">
  			<div class="card grey lighten-2">
  				<div class="card-content black-text">
  					<span class="card-title center">Respaldo de Base de datos</span>
  					<p class="center">respaldar BD</p>
  				</div>
  				<div class="card-action">
  					<a class="waves-effect waves-light btn">Respaldar BD</a>
  				</div>
  			</div>
  		</div>
  		<div class="col s12 m6">
  			<div class="card grey lighten-2">
  				<div class="card-content black-text">
  					<span class="card-title center">Ayuda</span>
  					<p class="center">Manual de Usuario</p>
  				</div>
  				<div class="card-action">
  					<a class="waves-effect waves-light btn">Soporte</a>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</div>




<br>
  <br>
  <br>
  <br>
  <br>

<script>
		
 $(document).ready(function(){
    $('ul.tabs').tabs();
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });
        
	</script>
</body>
<?
include_once("footer.php")
	?>
</html>
