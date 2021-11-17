<?php
    if($_POST['buscar']=="precios"){
        include("funcion.php");
        $rs=mysqli_query($cnn,"SELECT * FROM productos");
           echo"<table aling='center' border='1'>";
           echo"<tr aling='center'>";
               echo"<td><b>nombre_productos</b></td>";
               echo"<td><b>precio</b></td>";
           echo"</tr'>";
    
        while($row=mysqli_fetch_array($rs)){
           echo"<tr>";
           echo"<td> $row[0]</td>";
           echo"<td> $row[2]</td>";
           echo"</tr>";
       }
           echo"</table>";
           echo"</table>";
        }

?>