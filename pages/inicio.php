<?php include 'header.php'; ?>
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../plugins/select2/select2.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include 'main_sidebar.php'; ?>
      <?php include 'top_nav.php'; ?>
      <style>
        label {
          color: black;
        }

        li {
          color: white;
        }

        ul {
          color: white;
        }

        #buscar {
          text-align: right;
        }
      </style>
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x-panel">
            </div>
          </div>
        </div>
        <div class="box-body">
        </div>
        <div class="box-header">
          <h3 class="box-title"> MENU</h3>
        </div>
        <div class="box-body">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div>
          <div class="box-body">
            <div class="row">
              <?php
              if ($tipo == "administrador" or $tipo == "empleado") {
              ?>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-black">
                    <div class="inner">
                      <h4>
                        <?php
                        $num = 0;
                        $select = mysqli_query($con, "SELECT * FROM usuario ") or die(mysqli_error($link));
                        $num = mysqli_num_rows($select);
                        echo $num;
                        ?>
                      </h4>
                      <p>usuarios</p>
                    </div>
                    <?php echo ($num > 0) ? '<a href="usuario.php" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                  </div>
                </div>
              <?php
              }
              ?>
              <?php
              if ($tipo == "administrador") {
              ?>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-orange">
                    <div class="inner">
                      <h4>
                        <?php
                        $num = 1;
                        echo $num;
                        ?>
                      </h4>
                      <p>Configuracion Peluqueria</p>
                    </div>
                    <?php echo ($num > 0) ? '<a href="configuracion.php" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h4>
                        <?php
                        $num = 0;
                        $query = mysqli_query($con, "select * from reserva ") or die(mysqli_error());
                        $i = 0;
                        while ($row = mysqli_fetch_array($query)) {
                          $num++;
                        }
                        echo $num;
                        ?>
                      </h4>
                      <p>Reservas</p>
                    </div>
                    <?php echo ($num > 0) ? '<a href="reserva.php" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                  </div>
                </div>
              <?php
              }
              ?>
              <?php
              if ($tipo == "cliente" or $tipo == "empleado") {
              ?>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h4>
                        <?php
                        $num = 0;
                        $query = mysqli_query($con, "select * from reserva ") or die(mysqli_error());
                        $i = 0;
                        while ($row = mysqli_fetch_array($query)) {
                          $num++;
                        }
                        echo $num;
                        ?>
                      </h4>
                      <p>Reservas hechas</p>
                    </div>
                    <?php echo ($num > 0) ? '<a href="reservas_usuario.php" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h4>
                        <?php
                        $num = 1;
                        while ($row = mysqli_fetch_array($query)) {
                          $num++;
                        }
                        echo $num;
                        ?>
                      </h4>
                      <p>Agregar reserva</p>
                    </div>
                    <?php echo ($num > 0) ? '<a href="reserva.php" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                  </div>
                </div>
              <?php
              }
              ?>
              <?php
              if ($tipo == "administrador" or $tipo == "empleado") {
              ?>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-purple">
                    <div class="inner">
                      <h4>
                        <?php
                        $num = 0;
                        $select = mysqli_query($con, "SELECT *   from usuario where tipo='cliente' ") or die(mysqli_error($link));
                        $num = mysqli_num_rows($select);
                        echo $num;
                        ?>
                      </h4>
                      <p>Clientes</p>
                    </div>
                    <?php echo ($num > 0) ? '<a href="Clientes.php" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <footer>
    <div class="pull-right">
      Turn Hair <a href="#"></a>
    </div>
    <div class="clearfix"></div>
  </footer>
  </div>
  </div>
  <?php include 'datatable_script.php'; ?>
  <script>
    $(document).ready(function() {
      $('#example2').dataTable({
        "language": {
          "paginate": {
            "previous": "anterior",
            "next": "posterior"
          },
          "search": "Buscar:",
        },
        "info": false,
        "lengthChange": false,
        "searching": false,
        "searching": true,
      });
    });
  </script>
</body>

</html>