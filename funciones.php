<?php 

function usuario($usuario)
{
 $db = new Conexion();
 $query  = " SELECT nombre,registro  FROM usuarios WHERE registro='$usuario'";
 $result = $db->query($query); 
 $dato   = mysqli_fetch_array($result);
 return strtoupper($dato['nombre']);

}


 ?>