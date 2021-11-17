<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <title>pagar</title>
</head>
<body>
<?php error_reporting(0);?>
    <form method="post">
<center>
    <h1>Pagar Cuenta</h1>
<table>
    <tr>
        <td>monto:</td>
        <td><input type="text" name="montoTX"></td>
    </tr>
    <tr>
        <td>numero cuenta:</td>
        <td><input type="text" name="cuentaN"></td>
    </tr>
</table>
        <input type="submit" name="pagarBTN" value="pagar">
        <input type="button" value="Volver" onClick="window.location.href='MenuFunc.php'">

<?php
    if ($_POST['pagarBTN']=="pagar"){
        error_reporting(0);
        include ("funcion.php");
        $cnn=conectar();
        $monto=$_POST['montoTX'];
        $cuenta=$_POST['cuentaN'];
        $rs=mysqli_query($cnn,"UPDATE cuenta set deuda=( deuda - '$monto') where numero_cu='$cuenta'");
        echo"<script>alert('se pagado la deuda')</script>";

    }
?>
</form>
    
</body>
</html>