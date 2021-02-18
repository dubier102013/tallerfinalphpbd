<?php
include ("conexionbd.php");
$Conexion= Conecta();

$idproducto = $_POST["Idproducto"];
$nombre =$_POST["nombre"];
$valorPro = $_POST["ValorPro"];
$descripcionpro = $_POST["Descripcionpro"];

$Modificar = " UPDATE productos SET Id_Producto='$idproducto',Nom_Producto='$nombre',Valor_Pro='$valorPro',Descripcion_Pro='$descripcionpro' WHERE Id_Producto = $idproducto";  


$ejecutar = mysqli_query($Conexion,$Modificar);


if ($ejecutar) {
	echo '<script> alert ("registro Modificado");
	location.href = " ModificarPro.php ";
	</script>';
}
else
{
	echo '<script> alert ("Error de Modificado");
	location.href = "ModificarPro.php";
	</script>';
}
?>