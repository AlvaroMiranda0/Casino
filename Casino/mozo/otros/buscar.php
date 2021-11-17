<!DOCTYPE html>
<html lang="en">
<head>
    <title>buscar inventario</title>
</head>
 <form method="post">
<body>
    <center>
    <h1>buscar en el inventario</h1>
    <hr> 


        <table>
            <tr>
                <td>nombre producto</td>
                <td><input type="text" name="producto" value=""></td>
            </tr>
        </table>

        <hr>
    <input type="submit" name="BTbuscar" value="buscar">
    <input type="submit" name="btntodos" value="ver todo">
    <br> <br>
    ||<a href="mozoMenu.php">regresar a paguina principal </a>||
    
</form>
    <?php
    
        error_reporting(0);

        if ($_POST['BTbuscar']=="buscar"){
            include("funcion.php");
            $cnn=conectar();
            $nom=$_POST['producto'];
            $rs=mysqli_query($cnn,"SELECT * FROM productos WHERE nombre_prducto='$nom'");
            echo"<table aling='center' border='1'>";
            echo"<tr aling='center'>";
            echo"<td><b>nombre_prducto</b></td>";
            echo"<td><b>descripcion</b></td>";
            echo"<td><b>precio</b></td>";
            echo"<td><b>cantidad</b></td>";
            echo"</tr>";
    
            while($row=mysqli_fetch_array($rs))
            {
                echo"<tr>";
                echo"<td> $row[0]</td>";
                echo"<td> $row[1]</td>";
                echo"<td> $row[2]</td>";
                echo"<td> $row[3]</td>";
            }
                echo"</table>";
                echo"<script>alert('se ha realizado una busqueda')</script>";
        }
    
    
    
    ?>    
    
    <?php
    if($_POST['btntodos']=="ver todo"){
    include("funcion.php");
    $cnn=conectar();
    echo"<br>";
        $rs=mysqli_query($cnn,"SELECT * FROM productos");
        echo"<table aling='center' border='1'>";
        echo"<tr aling='center'>";
            echo"<td><b>nombre_productos</b></td>";
            echo"<td><b>descripcion</b></td>";
            echo"<td><b>apellido</b></td>";
            echo"<td><b>precio</b></td>";
            echo"<td><b>cantidad</b></td>";
        echo"</tr'>";

    while($row=mysqli_fetch_array($rs)){
        echo"<tr>";   
        echo"<td> $row[0]</td>";    
        echo"<td> $row[1]</td>";    
        echo"<td> $row[2]</td>";          
        echo"<td> $row[2]</td>";
        echo"<td> $row[3]</td>";
        echo"</tr>";

    }
        echo"</table>";
        echo"</table>";
        echo"<script>alert('se ha realizado una busqueda')</script>";
}


?>
</body>
</html>