<?php
include ("conexionbd.php");
$Conexion= Conecta();

$idproducto = $_POST["Idproducto"];
$nombre =$_POST["nombre"];
$valorPro = $_POST["ValorPro"];
$descripcionpro = $_POST["Descripcionpro"];


$insertar = "Insert into productos Values ('$idproducto','$nombre','$valorPro','$descripcionpro')";

$ejecutar= mysqli_query($Conexion,$insertar);

if ($ejecutar) {
	echo '<script> alert ("registro ingresado");
	location.href = " IngresoPro.php ";
	</script>';
}
else
{
	echo '<script> alert ("Error de ingreso");
	location.href = "IngresoPro.php";
	</script>';
}




  ?>