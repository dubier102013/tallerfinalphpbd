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
       	  	<td>IdProducto</td>
            <td>Nombre</td>
            <td>Valor</td>
            <td>Descripcion</td>
         </tr>
<?php
     $comando="Select * from productos";
     $ejecutar= mysqli_query($Conexion,$comando);
     while($row = mysqli_fetch_array($ejecutar) )
     {

?>
         <tr>
       	  	<td><?php echo $row["Id_Producto"]  ?></td>
            <td><?php  echo $row["Nom_Producto"]?></td>
            <td><?php echo $row["Valor_Pro"] ?></td>
            <td><?php echo $row["Descripcion_Pro"] ?></td>
         </tr>
<?php 
}
 ?>

       </table>
</body>
</html>