<?php session_start();
if (empty($_SESSION['id'])) :
endif;
include('../dist/includes/dbcon.php');
$cid = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
mysqli_query($con, "update usuario set usuario='$usuario',nombre='$nombre',apellido='$apellido',telefono='$telefono',tipo='$tipo',correo='$correo' where id='$cid'") or die(mysqli_error());
echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
echo "<script>document.location='usuario.php'</script>";
