<?php
session_start();
include('dist/includes/dbcon.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
if ($password == $password2) {
	$query2 = mysqli_query($con, "select * from usuario where usuario='$usuario'") or die(mysqli_error($con));
	$count = mysqli_num_rows($query2);
	if ($count > 0) {
		echo "<script type='text/javascript'>alert('usuario ya existe!');</script>";
		echo "<script>document.location='reserva_agregar.php'</script>";
	} else {
		$pass = md5($password);
		$salt = "a1Bz20ydqelm8m1wql";
		$pass = $salt . $pass;
		mysqli_query($con, "INSERT INTO usuario(usuario,password,tipo,nombre,apellido,telefono,correo)
				VALUES('$usuario','$pass','cliente','$nombre','$apellido','$telefono','$correo')") or die(mysqli_error($con));
		echo "<script>document.location='index.php'</script>";
	}
} else {
	echo "<script type='text/javascript'>alert('Error Las contraseñas no coinciden registre de nuevo!');</script>";
	echo "<script>document.location='reserva_agregar.php'</script>";
}
