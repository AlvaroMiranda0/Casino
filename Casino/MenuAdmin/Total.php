<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>totales</title>
</head>

<body>
<?php error_reporting(0);?>
<center>

<form action="" method="post">
    <h1>Total ganado en el dia</h1>
<input type="submit" name="sumador" value="sumar">

<input type="submit" name="buscardor" value="buscar">

<?php
if($_POST['sumador']=="sumar"){
    include("funcion.php");
    $cnn=conectar();
    $rs=mysqli_query($cnn,"UPDATE resumen SET total= (SELECT SUM(deuda) + SUM(total) FROM cuenta, ventas)");

    echo"<script>alert('se ha sumados los valores')</script>";
}
?>

<?php
if($_POST['buscardor']=="buscar"){
    include("funcion.php");
    $cnn=conectar();
    $rs=mysqli_query($cnn,"SELECT * FROM resumen");

    echo"<table aling='center' border='1'>";
    echo"<tr aling='center'>";
        echo"<td><b>Total Ganado</b></td>";
    echo"</tr'>";

while($row=mysqli_fetch_array($rs)){
    echo"<tr>";   
    echo"<td> $row[0]</td>";       
    echo"</tr>";
}
    echo"</table>";
    echo"</table>";
    echo"<script>alert('se ha realizado una busqueda')</script>";
}
?>
<input type="button" value="Volver" onClick="window.location.href='MenuAdmin.php'">
</form>
</body>
</html>