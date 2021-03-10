<?php
$host="localhost";
$usuario="root";
$contraseña="";
$bd="sie";
$conexion=mysqli_connect($host,$usuario,$contraseña,$bd);
if(!$conexion){
	echo "<script>
	alert('Ocurrio algun error al conectar a la base de datos');
	</script>";
	
}

?>