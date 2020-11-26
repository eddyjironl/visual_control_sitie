<?php 
// Script para la creacion de mensajes de contacto en el sitio web. oficial de V.C.
	
	// ------------------------------------------------------------------------------------------------------------------	
	// A)- Coneccion a la base de datos.
	// ------------------------------------------------------------------------------------------------------------------	
	include("coneccion.php");
	$oConn = get_coneccion("SYS");
	
	// B)- parametros que estoy recibiendo.
	$lcfullanme = mysqli_real_escape_string($oConn,$_POST["cfullname"]);
	$lcemail    = mysqli_real_escape_string($oConn,$_POST["cemail"]);
	$lctel      = mysqli_real_escape_string($oConn,$_POST["ctel"]);
	$lmnotas    = mysqli_real_escape_string($oConn,$_POST["mnotas"]);
	
	//C- verificando que no este el espacio en blanco
	if (empty($lcfullanme)){
		
		header("location:../view/contacto.php");
		return ;
	}
	if (empty($lcemail)){
		header("location:../view/contacto.php");
		return ;
	}
	if (empty($lctel)){
		header("location:../view/contacto.php");		
		return ;
	}
	if (empty($lmnotas)){
		header("location:../view/contacto.php");		
		return ;
	}
	$lcsql = " insert into sycont(cfullname, ctel,cemail,mnotas,fecha)
				values('$lcfullanme','$lctel','$lcemail','$lmnotas','". date('Y-m-d'). "')";
	// generando la consulta	
	mysqli_query($oConn,$lcsql);
	
	if (mysqli_affected_rows($oConn) > 0){
		mysqli_close($oConn);
		header("location:../view/contacto.php");
	}else{
		mysqli_close($oConn);
		echo "<h1>PROBLEMA EN EL ENVIO</h1>";
		echo "Su mensaje no ha sido enviado por favor intentelo mas tarde.";
		echo "Gracias..!!";
	}
?>