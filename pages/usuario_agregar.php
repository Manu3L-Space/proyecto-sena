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
          <h3 class="box-title"> REGISTRAR USUARIOS </h3>
        </div>
        <a class="btn btn-danger btn-print" href="usuario.php" style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>
        <div class="box-body">
          <form class="form-horizontal" method="post" action="usuario_add.php" enctype='multipart/form-data'>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Nombre</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="text" class="form-control pull-right" id="date" name="nombre" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Apellido</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="text" class="form-control pull-right" id="date" name="apellido" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Usuario</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="text" class="form-control pull-right" id="usuario" name="usuario" placeholder="usuario" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Contraseña</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="password" class="form-control pull-right" id="date" name="password" placeholder="password " required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Repita contraseña</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="password " required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Telefono</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Tipo usuario</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <select class="form-control select2" name="tipo" required>
                    <option value="administrador">administrador</option>
                    <option value="empleado">empleado</option>
                    <option value="cliente">cliente</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 btn-print">
                <div class="form-group">
                  <label for="date">Correo</label>
                </div>
              </div>
              <div class="col-md-4 btn-print">
                <div class="form-group">
                  <input type="text" class="form-control" id="correo" name="correo" placeholder="correo" required>
                </div>
              </div>
              <div class="col-md-4 btn-print">
              </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar cambios</button>
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
  <script type="text/javascript">
    $(document).ready(function() {
      $("#id_clase").change(function() {
        $.get("get_tipo.php", "id_clase=" + $("#id_clase").val(), function(data) {
          $("#id_tipo").html(data);
          console.log(data);
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#id_provincia").change(function() {
        $.get("get_municipio.php", "id_provincia=" + $("#id_provincia").val(), function(data) {
          $("#id_municipio").html(data);
          console.log(data);
        });
      });
    });

    function Principal() {
      var flag1 = true;
      $(document).on('keydown', '[id=telefono]', function(e) {
        if ($(this).val().length == 3 && flag1) {
          $(this).val($(this).val() + "-");
          flag1 = false;
        }
        var flag2 = true;
        if ($(this).val().length == 7 && flag2) {
          $(this).val($(this).val() + "-");
          flag2 = false;
        }
      });
      var flag3 = true;
      $(document).on('keydown', '[id=cedula]', function(e) {
        if ($(this).val().length == 3 && flag3) {
          $(this).val($(this).val() + "-");
          flag3 = false;
        }
        var flag4 = true;
        if ($(this).val().length == 11 && flag4) {
          $(this).val($(this).val() + "-");
          flag4 = false;
        }
      });
      var flag5 = true;
      $(document).on('keydown', '[id=telefono]', function(e) {
        if ($(this).val().length == 12 && flag5) {
          this.value = this.value.slice(0, 11);
          flag5 = false;
        }
      });
      var flag6 = true;
      $(document).on('keydown', '[id=cedula]', function(e) {
        if ($(this).val().length == 13 && flag6) {
          this.value = this.value.slice(0, 12);
          flag6 = false;
        }
      });
    }
  </script>
</body>

</html>