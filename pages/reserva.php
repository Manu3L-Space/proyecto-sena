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
        <div class="panel-heading">
        </div>
        <div class="box-header">
          <h3 class="box-title"> REGISTRAR RESERVA </h3>
        </div>
        <div class="box-body">
          <form class="form-horizontal" method="post" action="reserva_add.php" enctype='multipart/form-data'>
            <?php
            $fechaactual = date('Y-m-d');
            ?>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Fecha actual</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="date" class="form-control pull-right" id="fechaactual" name="fechaactual" value="<?php echo $fechaactual; ?>" readonly>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Fecha de reserva</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="date" class="form-control pull-right" id="fechareserva" name="fechareserva" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Hora reserva</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="time" class="form-control pull-right" id="hora" name="hora" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <div class="modal-footer">
            </div>
          </form>
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