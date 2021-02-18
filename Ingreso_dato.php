<?php
include ("conexionbd.php");
$Conexion= Conecta();

$documento = $_POST["documento"];
$nombre =$_POST["nombre"];
$Apellido = $_POST["Apellido"];
$Direccion = $_POST["Direccion"];
$Valordeuda = $_POST["valordeuda"];

$insertar = "Insert into clientes Values ('$documento','$nombre','$Apellido','$Direccion','$Valordeuda')";

$ejecutar= mysqli_query($Conexion,$insertar);

if ($ejecutar) {
	echo '<script> alert ("registro ingresado");
	location.href = "Ingreso.php ";
	</script>';
}
else
{
	echo '<script> alert ("Error de ingreso");
	location.href = "Ingreso.php";
	</script>';
}




  ?>