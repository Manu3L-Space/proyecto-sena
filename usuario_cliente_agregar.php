<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Registro - Peluqueria Machis</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="sistema de parqueamiento, parqueo,codigo fuente parqueo, sistema de parqueamiento con codigo fuente" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    <center>
        <h2 style="color:white;">Registrar usuario</h2>
    </center>
    <div class=" w3l-login-form">
        <h2>Registro </h2>
        <form class="form-horizontal" method="post" action="usuario_cliente_add.php" enctype='multipart/form-data'>
            <a href="index.php" class="btn btn-warning btn-print" style=" font-size: 20px; width:410px;" role="button">login</a>
            <div class=" w3l-form-group">
                <label>Nombre:</label>
                <div class="group">
                    <i class="fas fa-edit"></i>
                    <input type="text" class="form-control pull-right" id="date" name="nombre" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Apellido:</label>
                <div class="group">
                    <i class="fas fa-edit"></i>
                    <input type="text" class="form-control pull-right" id="date" name="apellido" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Usuario:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control pull-right" id="usuario" name="usuario" placeholder="usuario" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control pull-right" id="date" name="password" placeholder="password " required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Repita Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="password " required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Telefono:</label>
                <div class="group">
                    <i class="fas fa-edit"></i>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Correo:</label>
                <div class="group">
                    <i class="fas fa-edit"></i>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="correo" required>
                </div>
            </div>
            <button class="btn btn-success" type="submit">Registrar</button>
    </div>
    <div class="forgot">
    </div>
    </form>
    </div>
    <footer>
    </footer>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/demo.js"></script>
</body>

</html>