<?php session_start();
if (empty($_SESSION['id'])) :
endif;
include('../dist/includes/dbcon.php');
$id_empresa = $_POST['id_empresa'];
$empresa = $_POST['empresa'];
$nit = $_POST['nit'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$correo = $_POST['correo'];
$moneda = $_POST['moneda'];
$simbolo_moneda = $_POST['simbolo_moneda'];
$impuesto_producto = $_POST['impuesto_producto'];
mysqli_query($con, "update empresa set empresa='$empresa',nit='$nit',direccion='$direccion',telefono='$telefono',descripcion='$descripcion',correo='$correo',moneda='$moneda',simbolo_moneda='$simbolo_moneda',impuesto_producto='$impuesto_producto' where id_empresa='$id_empresa'") or die(mysqli_error());
echo "<script type='text/javascript'>alert('peluqueria actualizada correctamente!');</script>";
echo "<script>document.location='configuracion.php'</script>";
