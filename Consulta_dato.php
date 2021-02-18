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
       	  	<td>Documento</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Deuda</td>
         </tr>
<?php
     $comando="Select * from clientes";
     $ejecutar= mysqli_query($Conexion,$comando);
     while($row = mysqli_fetch_array($ejecutar) )
     {

?>
         <tr>
       	  	<td><?php echo $row["Doc_id_cliente"]  ?></td>
            <td><?php  echo $row["Nombre_cliente"]?></td>
            <td><?php echo $row["Apellido_clinte"] ?></td>
            <td><?php echo $row["Direccion_cliente"] ?></td>
            <td><?php  echo $row["Valor_Deuda_cliente"]?></td>
         </tr>
<?php 
}
 ?>

       </table>
</body>
</html>

