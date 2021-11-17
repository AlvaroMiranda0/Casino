<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title> mostrar cuenta </title>
</head>
<body>
    <form method="post">
        <center>
           <h1>mostrar deuda</h1>
           <center>Ingrese su numero de cuenta</center>
    <table>
        <tr>
            <td>numero de cuenta</td>
            <td><input type="text" name="n_cuenta" value=""></td>
        </tr>
        <tr>
    </table>

    <input type="submit"name="buscarBT" value="buscar">
    <br> <br>
</form>

<?php
error_reporting(0);
if($_POST['buscarBT']="buscar")
{
    include("funcion.php");
    $cnn=conectar();
    $ncuenta=$_POST['n_cuenta'];
    $rs=mysqli_query($cnn,"SELECT * from cuenta where numero_cu='$ncuenta'");  
    echo"<table aling='center' border='1'>";
    echo"<tr aling='center'>";
    echo"<td><b>fecha de compra</b></td>";
    echo"<td><b>numero de cuenta</b></td>";
    echo"<td><b>deuda</b></td>";  
    echo"</tr>";
} while($row=mysqli_fetch_array($rs))
{
    echo"<tr>";
    echo"<td> $row[1]</td>";
    echo"<td> $row[2]</td>";
    echo"<td> $row[3]</td>";
    echo"<script>alert('se ha realizado una busqueda')</script>";
}
echo"</table>";              
?>
</body>
<input type="button" value="Volver" onClick="window.location.href='MenuFunc.php'">
</html>