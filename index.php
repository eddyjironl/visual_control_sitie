<html>
	<head>
		<title>Desarrollos integrales VC</title>
		<link rel="stylesheet" href="./css/index.css"> 
		<link rel="stylesheet" href="../vc2020/css/vc_estilos.css"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
	<header class="barra_sencilla">
		<div class="caja">
			<img id="logo" src="./fotos/0002.jpg" style="width:300px;">
		</div>
		<div class="caja">
			<h1>Portal Visual Control</h1>
			<p id="lema">
				Te ayudamos a Crecer y lograr tus metas 
			</p>
		</div>
	</header>
	<aside id="barra">
		<a href="./index.php">
			<button  class="btlinksactive" id="inicio">Inicio</button>
		</a>
		<a href="./view/productos.php" >
			<button  class="btlinks" >Aplicaciones y Servicios</button>
		</a>
		<a href="./view/contacto.php">
			<button  class="btlinks" >Contactenos</button>
		</a>
	</aside>
		<br>
		<section id="detalles">
			<div>
				<h1> Informacion general </h1>
				<P class="subdetalles">
					<strong>Gracias por Visitarnos, Bienvenidos..!!</strong> <br><br>
					El objetivo de este portal es presentarles el Sistema Administrativo Contable Visual Control, un aplicativo que nos permite ayudar a  negocios a crecer y alcanzar sus objetivos simplificando los registros administrativos y brindando información operativa esencial para la toma de decisiones. <br>
					<BR>
					Visual Control es totalmente personalizable y cuenta con versiones en Escritorio y Web, este aplicativo se ha adaptado y configurado para diferentes tipos de empresas haciendo muy específicas estas versiones, en la página de <a href="./view/productos.php" >Aplicaciones y servicios </a> lo invitamos a que las vea y expanda la información de los blochur informativos de cada solución para que las conozca.<BR>
					<BR>
					Los siguientes links le darán la información que podria interesarle, lo invitamos a que se <a href="./view/contacto.php"> contacte con nosotros </a> nos envié un correo o a través de nuestra página de contacto, será un placer atenderles.<BR>
					<BR>
					<strong>Podría interesarle los siguientes link </strong><br>
					1) Una explicacion detallada del proceso de implementacion del sistema y modulos base integrados.<br>
					2) Una presentacion de power point que podra descargar y ver en su computadora que explica graficamente que es Visual Control<br>
					3) Facebook de Visual Control.
					<BR><br>
					<a href="INFORMACION_GENERAL.pdf" target="#" id="info3">
						<img src= "fotos/info_tecnica.jpg" id="info_tecnica" title="Plan de instalacion y contenido del sistema">
					</a>
					<a href="https://drive.google.com/file/d/1ROexcq6eTIYLTMbDgf3qabk_Q-w4_Jp9/view?usp=sharing" target="#" id="info2">
						<img src= "fotos/presentacion.jpg" id="presentacion_tecnica" title="Explicacion hablada de Visual Control">
					</a>
					<a href="https://web.facebook.com/visualcontrol.centroamerica" target="#" id="info1">
						<img src="fotos/facebook.png"
							id="face" title="Redes Sociales Perfil de Facebook de Visual Control">
					</a>
				</p>
			</div>
		</section>
		<?php
			include("./modelos/pie_pagina.php");
		?>
	</body>
	
</html>