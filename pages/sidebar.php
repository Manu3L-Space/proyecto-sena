<?php $id = $_SESSION['id']; ?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3><?php echo $empresa; ?></h3>
    <ul class="nav side-menu">
      <li><a href="inicio.php"><i class="fa fa-dashboard"></i> inicio <span class="fa fa-chevron-right"></span></a></li>
      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {
      ?>
      <?php
      }
      ?>
      <?php
      if ($tipo == "administrador") {
      ?>
        <li><a><i class="fa fa-group"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="usuario.php">Usuarios</a></li>
            <li><a href="usuario_agregar.php">Agregar</a></li>
          </ul>
        </li>
      <?php
      }
      ?>
      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {
      ?>
      <?php
      }
      ?>
      <li><a><i class="fa fa-group"></i> Reservas<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <?php
          if ($tipo == "administrador" or $tipo == "empleado" or $tipo == "cliente") {
          ?>
            <li><a href="reserva.php"><i class="fa fa-database"></i>Hacer reserva<span class="fa fa-chevron-right"></span></li></a>
          <?php
          }
          ?>
          <?php
          if ($tipo == "administrador" or $tipo == "empleado") {
          ?>
            <li><a href="lista_reservas.php"><i class="fa fa-database"></i>Lista de reservas<span class="fa fa-chevron-right"></span></li></a>
          <?php
          }
          ?>
        </ul>
      </li>
      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {
      ?>
      <?php
      }
      ?>
      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {
      ?>
      <?php
      }
      ?>
      <?php
      if ($tipo == "administrador") {
      ?>
      <?php
      }
      ?>
  </div>
</div>