<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <script src="js/materialize.js"></script>
  <script src="js/materialize.min.js"></script> 
	<title>sesion</title>
</head>
<body>
	<nav>
  <div class="nav-wrapper red darken-4">
  </div>
 </nav>
<br>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel grey lighten-4">
					
						<center><img src="images/Logo Iujo.gif" width="300" height="300" class="responsive-img"></center>
						<p class="black-text center" align="center">Por favor introduzca su Usuario y su Clave para ingresar</p>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">people</i>
          <input id="icon_prefix" type="text" class="validate black-text">
          <label for="icon_prefix">Usuario</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate black-text">
          <label for="password">Password</label>
        </div>

      </div>
      <center>
      <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
    <i class="material-icons right">send</i>
  </button>

  <button class="btn waves-effect waves-light" type="submit" name="action">Volver
    <i class="material-icons right">send</i>
  </button>
        
</center>
    </form>
  </div>
        <br>
        <br>
					
					
				</div>
			</div>
		</div>
	</div>
<?
include_once("footer.php")
?>
</body>
</html>