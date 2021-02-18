<?php

$Conexion= mysqli_connect('localhost','root','','tienda');
?> 
<!DOCTYPE html>
<html>
   <head>
	    <title>MOSTRAR LA TABLA</title>
   </head>
<body>
   <br>
       <table>
       	  <tr>
       	  	<td>Numero de factura</td>
            <td>Id producto</td>
            <td>Valor</td>
            <td>cantidad</td>
         </tr>
<?php
     $comando="Select * from detalle_fac";
     $ejecutar= mysqli_query($Conexion,$comando);
     while($row = mysqli_fetch_array($ejecutar) )
     {

?>
         <tr>
       	  	<td><?php echo $row["Num_factura"]  ?></td>
            <td><?php  echo $row["Id_Producto"]?></td>
            <td><?php echo $row["Valor_Pro_detalle"] ?></td>
            <td><?php echo $row["cantida_Pro_deta"] ?></td>
         </tr>
<?php 
}
 ?>

       </table>
</body>
</html>