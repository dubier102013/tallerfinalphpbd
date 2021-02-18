<?php
include ("conexionbd.php");
$Conexion= Conecta();

$idproducto = $_POST["Idproducto"];


$Borrar = "Delete from productos where Id_Producto = '$idproducto ' ";

$ejecutar= mysqli_query($Conexion,$Borrar);

if ($ejecutar) {
	echo '<script> alert ("registro Borrado");
	location.href = " BorrarPro.php ";
	</script>';
}
else
{
	echo '<script> alert ("Error de Borrado");
	location.href = "BorrarPro.php";
	</script>';
}




  ?>