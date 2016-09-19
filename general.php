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
        <title>General</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
<?php include('pie-general.php'); ?>
    </head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<div class="container-fluid">


<div class="row">
<div class="col-md-12">
<?php include('nav.php'); ?>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<form action="general" class="form-inline" method="POST">
<label>Fecha de Inicio</label>
<input type="date" value="<?php echo $_POST['fechainicio'] ?>" name="fechainicio" class="form-control">
<label>Fecha de Fin</label>
<input type="date" value="<?php echo $_POST['fechafin'] ?>" name="fechafin" class="form-control">
<button class="btn btn-primary">Consultar</button>
</form>
<hr>

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