function init(){
	document.getElementById("btprod").setAttribute("class","btlinksactive");
	document.getElementById("ventana").style.display="none";
	document.getElementById("btsalir").addEventListener("click",cerrar_pantalla,false)
	document.getElementById("btvc2009").addEventListener("click",show_info,false);
	document.getElementById("btcem").addEventListener("click",show_info,false);
	document.getElementById("btbyr").addEventListener("click",show_info,false);
	document.getElementById("bthosp").addEventListener("click",show_info,false);
}
function cerrar_pantalla(){
	document.getElementById("ventana").style.display="none";
}
function show_info(e){
	var lcorigen = e.target.id;
	document.getElementById("ventana").style.display="inline-block";
	document.getElementById("ventana").focus();
	// determinando que presentar segun el caso
	// sistema POS
	if (lcorigen == "btvc2009"){
		// poniendo la foto de la ventana
		document.getElementById("info_logo").setAttribute("src","../fotos/vc2009.jpg");
		// poniendo el blochur
		document.getElementById("btblochur").setAttribute("href","../fotos/vc.pdf");
		// texto a desplegar en el mensaje
		var lcmsg = "<h2>INFORMACION </h2>";
		    lcmsg += "   Practico sistema para ferreterias, tiendas y comercio en general<br><br>";
		    lcmsg += "   <strong>Unico pago de $250 licencia para 3 maquinas </strong>";
			document.getElementById("mensaje").innerHTML = lcmsg;
	}
	// sistema expedientes medicos
	if (lcorigen == "btcem"){
		// poniendo la foto de la ventana
		document.getElementById("info_logo").setAttribute("src","../fotos/cem.jpg");
		// poniendo el blochur
		document.getElementById("btblochur").setAttribute("href","../fotos/cem.pdf");
		// texto a desplegar en el mensaje
		var lcmsg = "<br><br><h2>INFORMACION </h2>";
		    lcmsg += "   Practico sistema para Medicos de todas las especialidades <br>";
		    lcmsg += "   Incluye hasta modulo de facturacion para registrar los ingresos del profesional <br><br>";
		    lcmsg += "   <strong>Unico pago de $150 licencia para 2 maquinas </strong><br>";
		
		document.getElementById("mensaje").innerHTML = lcmsg;
	}
	// sistema Bares y Restaurantes
	if (lcorigen == "btbyr"){
		// poniendo la foto de la ventana
		document.getElementById("info_logo").setAttribute("src","../fotos/byr.jpg");
		// poniendo el blochur
		document.getElementById("btblochur").setAttribute("href","../fotos/byr.pdf");
		// texto a desplegar en el mensaje
		var lcmsg = "<br><br><h2>INFORMACION </h2>";
		    lcmsg += "   Sencillo y Bastante grafico un sistema orientado a  <br>";
		    lcmsg += "   negocios de comidas y bebidas de todo tipo  <br><br>";
		    lcmsg += "   <strong>Unico pago de $200 licencia para 2 maquinas </strong><br>";
		document.getElementById("mensaje").innerHTML = lcmsg;
	}
	// sistema de hospitales
	if (lcorigen == "bthosp"){
		// poniendo la foto de la ventana
		document.getElementById("info_logo").setAttribute("src","../fotos/hosp.jpg");
		// poniendo el blochur
		document.getElementById("btblochur").setAttribute("href","../fotos/hosp.pdf");
		// texto a desplegar en el mensaje
		var lcmsg = "<br><br><h2>INFORMACION </h2>";
		    lcmsg += "   Sistema con modulos admision, farmacia, examenes , consultas <br>";
		    lcmsg += "   Cuenta con modulo de monitoreo de costos para saber cuanto cuestan las consultas<br><br>";
		    lcmsg += "   <strong>Sujeto a Cotizacion </strong><br>";
		document.getElementById("mensaje").innerHTML = lcmsg;
	}
	// sistema de colegios
}
window.onload=init;
