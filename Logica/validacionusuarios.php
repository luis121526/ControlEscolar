<?php
require '../Logica/conexion.php';
$nocontrol=$_POST['nocontrol'];
$contra=$_POST['pass'];
$consulta1=mysqli_query($conexion,"SELECT *FROM alumno WHERE correoinst='$nocontrol' AND contra='$contra'");
$nr=mysqli_fetch_array($consulta1);
if (empty($nocontrol) || empty($contra)){
	echo "<script>
	alert('No puedes dejar campos vacios');
 	location.href='../index.php';
	</script>";
}
if($nr['id_cargo']==1){
	session_start();
	$_SESSION['usuario']=$nocontrol;
	echo "eres docente";
}
if($nr['id_cargo']==2){
	session_start();
	$_SESSION['usuario']=$nocontrol;
	echo "<script>
	location.href='../VistasUsuarios/Dashboard.php';
	</script>";
}

?>