<html>
	<head>
		<title>Desarrollos integrales VC</title>
		<link rel="stylesheet" href="../css/index.css"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			function init(){
				document.getElementById("btcontact").setAttribute("class","btlinksactive");
			}
			window.onload=init;
		</script>
	</head>
	<body>
		<?php
			include("../modelos/cabecera.php");
			include("../modelos/menu.php");
		?>
		<section>
			<form class="form" id="contacto" name="contacto" method="post" action="../modelos/crud_contacto.php">
				<h1 id="titulo">Formulario de Contacto</h1>
				<br>
				<label class="labelnormal">Correo Electronico</label>
				<br>
				<input type="email" name="cemail" id="cemail" requiere>
				<br>
				<label class="labelnormal">Nombre </label>
				<br>
				<input type="text" name="cfullname" id="cfullname" requiere>
				<br>
				<label class="labelnormal">telefono</label>
				<input type="tel" name="ctel" id="ctel" placeholder="opcional" title="Recuerde poner la salida de su pais ejemplo +505....." requiere>
				<br>
				<label class="labelnormal">Mensaje</label>
				<textarea id="mnotas" name="mnotas" cols=50 rows=10></textarea>
				<br><br>
				<input type="submit" class="btlinks" value="enviar">
				<br>
				<br>
				<br>
				<p>Llena todos los campos para ponernos en contacto contigo lo antes posible.</p>
			</form>
			
		</section>
		
		<?php
			include("../modelos/pie_pagina.php");
		?>
	</body>
</html>	
