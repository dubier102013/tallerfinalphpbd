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
            <td>Documento cliente</td>
            <td>Valor</td>
          
         </tr>
<?php
     $comando="Select * from enca_fac";
     $ejecutar= mysqli_query($Conexion,$comando);
     while($row = mysqli_fetch_array($ejecutar) )
     {

?>
         <tr>
       	  	<td><?php echo $row["Num_factura"]  ?></td>
            <td><?php  echo $row["Doc_Client_fac"]?></td>
            <td><?php echo $row["Valor_Fac"] ?></td>
         </tr>
<?php 
}
 ?>

       </table>
</body>
</html>