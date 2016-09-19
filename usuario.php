<?php
 include('config.php');
 include('funciones.php');
 include('bd/conexion.php');
 $db = new Conexion();
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Usuario</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
<?php include('pie.php'); ?>
    </head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<?php include('nav.php'); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
<h1>Usuario: <i class="glyphicon glyphicon-user"></i> <?php echo usuario($_POST['usuario']); ?></h1>
<hr>
<form action="" method="POST" class="form-inline">
<select name="usuario" class="form-control" onchange="this.form.submit()">
<option value="">[Seleccionar Usuario]</option>
<?php 

$query  = "SELECT nombre,registro FROM usuarios;";
$result = $db->query($query);
while ($fila = mysqli_fetch_object($result))
 {
   echo "<option value='$fila->registro'>$fila->nombre</option>";
 }

 ?>
</select>
</form>
</div>
</div>

<div class="row">

<div class="col-md-4">
<div id="container-tematica"></div>
</div>

<div class="col-md-4">
<div id="container-elementos"></div>
</div>

<div class="col-md-4">
<div id="container-sub"></div>
</div>

</div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
</body>
</html>