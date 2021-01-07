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
          <h3 class="box-title"> </h3>
        </div>
        <div class="box-body">
          <form>
            Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />
          </form>
          <div class="box-header">
            <h3 class="box-title"> LISTA DE RESERVAS</h3>
          </div>
          <div class="box-body">
            <table ID="example22" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Usuario</th>
                  <th>fecha registro</th>
                  <th>fecha de reserva</th>
                  <th>hora reserva</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $fechaactual = date('Y-m-d');
                $session_id = $_SESSION['id'];
                $query = mysqli_query($con, "select * from reserva AS r INNER JOIN usuario AS u
      ON r.id_usuario = u.id 
       where id='$session_id'  ORDER BY id_reserva DESC;") or die(mysqli_error());
                $i = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $id_reserva = $row['id_reserva'];
                  $fechareserva = $row['fechareserva'];
                ?>
                  <tr>
                    <td><?php echo $row['id_reserva']; ?></td>
                    <td><?php echo $row['nombre'] . '  ' . $row['apellido']; ?></td>
                    <td><?php echo $row['fechaactual']; ?></td>
                    <td><?php echo $row['fechareserva']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <?php
                    if ($fechareserva < "$fechaactual") {
                    ?>
                      <td>vencido</td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($fechareserva >= "$fechaactual") {
                    ?>
                      <td>Pendiente</td>
                    <?php
                    }
                    ?>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <script type="text/javascript">
              function Eliminar(i) {
                document.getElementsByTagName("table")[0].setAttribute("id", "tableid");
                document.getElementById("tableid").deleteRow(i);
              }

              function Buscar() {
                var tabla = document.getElementById('example22');
                var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
                var cellsOfRow = "";
                var found = false;
                var compareWith = "";
                for (var i = 1; i < tabla.rows.length; i++) {
                  cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                  found = false;
                  for (var j = 0; j < cellsOfRow.length && !found; j++) {
                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1)) {
                      found = true;
                    }
                  }
                  if (found) {
                    tabla.rows[i].style.display = '';
                  } else {
                    tabla.rows[i].style.display = 'none';
                  }
                }
              }
            </script>
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