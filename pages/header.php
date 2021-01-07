<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peluqueria Machis</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="build/css/custom.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
  <style>
    h5,
    h6 {
      text-align: center;
    }

    @media print {
      .btn-print {
        display: none !important;
      }

      .main-footer {
        display: none !important;
      }

      .box.box-primary {
        border-top: none !important;
      }

      .nav_menu {
        display: none;
      }

      footer {
        display: none;
      }
    }
  </style>
  <?php include 'dbcon.php'; ?>
</head>