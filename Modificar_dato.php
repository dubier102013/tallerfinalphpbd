<?php
include ("conexionbd.php");
$Conexion= Conecta();

$documento = $_POST["documento"];
$nombre =$_POST["nombre"];
$Apellido = $_POST["Apellido"];
$Direccion = $_POST["Direccion"];
$Valordeuda = $_POST["valordeuda"];

$Modificar = " UPDATE clientes SET Doc_id_cliente ='$documento', Nombre_cliente='$nombre', Apellido_clinte='$Apellido' , Direccion_cliente='$Direccion',Valor_Deuda_cliente ='$Valordeuda' WHERE Doc_id_cliente = '$documento' ";  

echo "pase por el comando".$Modificar;

$ejecutar = mysqli_query($Conexion , $Modificar);

if ($ejecutar)
 {
	echo '<script> alert ("registro Modificado");
	location.href = "Modificar.php";
	</script>';
}
else
{
	echo '<script> alert ("Error de Modificado");
	location.href = "Modificar.php";
	</script>';
}
?>
