<?php


function Conecta()
{
  $Servidor='localhost';
  $Usuario='root';
  $Password='';
  $base= 'tienda';



 if(!($Conexion= mysqli_connect($Servidor,$Usuario,$Password,$base)))
  {
  	echo "Error de conexion";
  	exit();
  }


  return $Conexion;
}







  ?>