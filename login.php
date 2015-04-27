<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

if (TRUE) { // Si esta logueado   //$link=
	// iniciamos sesion
	$_SESSION['user'] = $user;	
	echo "<script>window.location.href='listado.php';</script>";		
} else {
	echo 'Usuario no autorizado';
}

?>