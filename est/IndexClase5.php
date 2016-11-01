<html>
<head>
	<title>Clase 05</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

	<form >
<div class ="CajaInicio Animated bounceIn">
<input type="text" name= "us" id = "us" value="<?php echo $_COOKIE['MiCookie']   ?>">
</input>

<input type="text" name= "pass" id = "pass">
</input>

<script type="text/javascript" src="java.js"></script>

<input type="button" onclick="Ingresar()" name= "guardar" id = "guardar" value = "Guardar">


</input>


<br> </br>

	</div>
</form>

</body>
</html>