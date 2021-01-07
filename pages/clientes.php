<?php include 'header.php';
?>
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
          <h3 class="box-title"> </h3>
        </div>
        <div class="box-body">
          <div class="box-header">
            <h3 class="box-title"> LISTA CLIENTES</h3>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre y apellidos</th>
                  <th>Telefono</th>
                  <th>Usuario</th>
                  <th>Correo</th>
                  <th class="btn-print"> Accion </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($con, "select * from usuario where tipo='cliente'") or die(mysqli_error());
                $i = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $cid = $row['id'];
                  $i++;
                ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['nombre'] . '  ' . $row['apellido']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td>
                      <?php
                      ?>
                      <a class="small-box-footer btn-print" href="<?php echo "eliminar_usuario.php?cid=$cid"; ?>"><i class="glyphicon glyphicon-remove"></i></a>
                      <a class="small-box-footer btn-print" href="<?php echo "editar_password.php?cid=$cid"; ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a class="btn btn-danger btn-print" href="<?php echo "editar_usuario.php?cid=$cid"; ?>" role="button">Editar</a>
                      <?php
                      ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        "searching": true,
      });
    });
  </script>
</body>

</html>