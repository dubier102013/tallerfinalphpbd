<?php
include ("conexionbd.php");
$Conexion= Conecta();

$documento = $_POST["documento"];


$Borrar = "Delete from clientes where Doc_id_cliente = '$documento' ";

$ejecutar= mysqli_query($Conexion,$Borrar);

if ($ejecutar) {
	echo '<script> alert ("registro Borrado");
	location.href = " Borrar.php ";
	</script>';
}
else
{
	echo '<script> alert ("Error de Borrado");
	location.href = "Borrar.php";
	</script>';
}




  ?>