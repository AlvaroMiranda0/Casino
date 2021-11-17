<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra</title>
</head>
<body>
    <form method="post">
    <center>
    <h1 class="titulo">compra</h1>

     <hr>
     <br>
     <div class="1">
    <table class="tabla"> 
    <tr>
        <td>nombre del porducto: </td>
        <td><input type="text" name="nombreP" value=""></td>
    </tr>
    <tr>
        <td>cantidad a comprar: </td>
        <td><input type="text" name="cantidad" value=""></td>
    </tr>
    <tr>
        <td>numero cuenta: </td>
        <td><input type="text" name="cuentasnumero" value=""></td>
    </tr>
    <tr>
        <td><input type="submit" class="boton" name="compraN"  value="agregar a cuenta"> </td>
        <td><input type="submit" class="boton" name="compra" value="comprar efectivo"></td>
        
    </tr>

    </table>
    </div>
    </form>
    <?php 
        error_reporting(0);
    if($_POST['compra']=="comprar efectivo"){  
            include("funcion.php");
            $cnn=conectar();
            $nom=$_POST['nombreP'];
            $cant=$_POST['cantidad'];
            $rs=mysqli_query($cnn,"UPDATE productos set cantidad= cantidad-'$cant',dia_hora_compra=(CURTIME()) where nombre_prducto='$nom'
            ");
            echo"</table>";
            echo"<script>alert('se ha realizado una compra')</script>";
    }
    ?>
    <?php
    if($_POST['compraN']=="agregar a cuenta"){
        include("funcion.php");
        $cnn=conectar();
        $nom=$_POST['nombreP'];
        $cant=$_POST['cantidad'];
        $numeroC=$_POST['cuentasnumero'];
        $rs=mysqli_query($cnn,"UPDATE cuenta, productos set deuda=(precio * '$cant'+ deuda) , cantidad=(cantidad-'$cant') ,dia_hora_compra=(CURTIME()) 
        where nombre_prducto='$nom' and numero_cu='$numeroC';");
        echo"<script>alert('$cant $nom $numeroC')</script>";
    }
    ?>
        <input type="button" value="Volver" onClick="window.location.href='mozoMenu.php'">
</body>
</html>