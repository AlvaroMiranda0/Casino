<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1>agregar a inventario</h1>
    
<form action="" method="post">
    
 <table>
     <tr>
         <td>nombre del producto</td>
         <td><input type="text" name="producto" value=""></td>
     </tr>

     <tr>
         <td>cantidad a ingresar</td>
         <td><input type="text" name="cantidad" value=""></td>
     </tr>

</table>
<input type="submit" name="ingresarB" value="ingresar">
||<a href="mozoMenu.php">regresar a paguina principal </a>||
     </form>
     <?php
     error_reporting(0);
        if($_POST['ingresarB']=="ingresar"){
            include("funcion.php");
            $cnn=conectar();
            $nom=$_POST['producto'];
            $can=$_POST['cantidad'];

            $rs=mysqli_query($cnn,"UPDATE productos SET cantidad=(cantidad +'$can') where nombre_prducto='$nom'");
            echo"<script>alert('se a agregado al inventario')</script>";
        }
        /*UPDATE productos
            set cantidad=(cantidad + 10  ) 
            where nombre_prducto='asado' */
     ?>

</body>
</html>