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

// Comentario

<<<<<<< HEAD
//El caramelo esta un poco acido y algo picanton xD
=======
//Esta linea es miaa GV
>>>>>>> 39b2bdf910f40201ffa2098d0dbf8ac469db18b8
?>
