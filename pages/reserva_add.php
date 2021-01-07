<?php
session_start();
include('../dist/includes/dbcon.php');
$fechaactual = $_POST['fechaactual'];
$fechareserva = $_POST['fechareserva'];
$hora = $_POST['hora'];
$id_sesion = $_SESSION['id'];
mysqli_query($con, "INSERT INTO reserva(id_usuario,fechaactual,fechareserva,hora,estado)
VALUES('$id_sesion','$fechaactual','$fechareserva','$hora','')") or die(mysqli_error($con));
echo "<script>document.location='reserva.php'</script>";
