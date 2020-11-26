<html>
	<head>
		<title>Desarrollos integrales VC</title>
		<link rel="stylesheet" href="../css/index.css"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="../js/productos.js?v1"></script>
	</head>
	<body>
		<?php
			include("../modelos/cabecera.php");
			include("../modelos/menu.php");
		?>
		<section id="detalles">
			<div id="ventana">
				<figure>
					<img src="" id="info_logo" >
				</figure>
				<br>
				<P id="mensaje"></P><br><br>
				<button  class="btlinks" id="btsalir">Cerrar ventana</button>
				<a href="../fotos/vc.pdf" target="#" id="btblochur" >
					<button  class="btlinks"  >Blochur informativo</button>
				</a>
			</div>
			<div>
				<h1> Aplicaciones  </h1>
				<P class="subdetalles">
					Bienvenidos a nuestro portal aqui usted podra conocer sobre los servicios y soluciones que ofrecemos.
					Una informacion detallada aparecera sobre el icono de cada producto.<br>
					Tenemos Sistemas en version Escritorio y Versiones Web que estan o se encuentran en proceso.
					precione click sobre la foto del aplicativo que le interese.
				</p>
			</div>
			<div>
				<div class="productos_v">
					<label id="btvc2009">Sistema punto de ventas</label><br>
					<img src="../fotos/vc2009.jpg" class="productos" >
				</div>
				<div class="productos_v">
					<label id="btcem">Sistema Expedientes Medicos</label><br>
					<img src="../fotos/cem.jpg" class="productos" >
				</div>
				<div class="productos_v">
					<label id="btbyr">Bares y Restaurantes</label><br>
					<img src="../fotos/byr.jpg" class="productos" >
				</div>
				<div class="productos_v">
					<label id="bthosp">Sistema Hospitales</label><br>
					<img src="../fotos/hosp.jpg" class="productos" >
				</div>
			</div>
			<div>
			<h1> Demos de Sistemas </h1>
				<P class="subdetalles">
					<p class="subdetalles">
						Seleccione un link que lo llevara a la Aplicacion DEMO que desee observar.<br>
						Los credenciales son:<br><br><br>
						
						Usuario= <strong> supervisor </strong><br>
						clave  = <strong>2505</strong>
					
					<br><br><br>
						
					<a  href="../vc2020/index.php" target="#" title="Punto de Ventas">
						<button  class="btlinks" >Sistema de punto de ventas</button>
					</a>
					
					<a href="../poscarito/index.php" target="#" title="Sistema para Ingresos y Gastos">
						<button  class="btlinks" >Ingresos y Gastos - Compras</button>
					</a>
				   </p>
				</P>
			</div>
		</section>
		<?php
			include("../modelos/pie_pagina.php");
		?>
	</body>
	
</html>