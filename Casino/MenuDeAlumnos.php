<html>
<link rel="stylesheet" href="stylea.css">
  <head>
  <title>Kiosko</title>
  </head>
  <body>
  <div class="main-block">
  <center><img src="logok.png"></center>
  <form method="post">
  <hr>
        <center>Seleccione Producto</center>
        <select name="op">
            <option hidden selected>Seleccione un Producto</option>
            <option value="bolsa de chipchop"> bolsa de chispop</option>
            <option value="bolsa de doritos"> bolsa de doritos</option>
            <option value="bolsa de ramitas"> bolsa de ramitas</option>
            <option value="ensalada">ensalada</option>   
            </select>
            <hr>
            <div class="btn-block">
                Cantidad <input type="text" name="cantidades" values="">
                <input type="submit" name="btnpagar" value="pagar" >
                <input type="submit" name="buscar" value="precios" >
                <input type="button" value="Menu Principal" onClick="window.location.href='Index.php'">
                </div>
     </form>
     </div>
     <?php
         error_reporting(0);
         include("funcion.php");
            $cnn=conectar();
            $cant=$_POST['cantidades'];
            $opcion=$_POST['op'];

          if ($opcion=="bolsa de chipchop"){
            $rs=mysqli_query($cnn,"UPDATE productos
            set cantidad=(cantidad-'$cant')
            where nombre_prducto='bolsa de chipchop'");
            echo"<script>alert('se ha realizado una compra de un chispop')</script>";
            $pr1 = 500 *$cant;
            echo"<script>alert('$cant $opcion = $pr1')</script>";
          }if ($opcion == "bolsa de doritos"){
            $rs=mysqli_query($cnn,"UPDATE productos
            set cantidad=(cantidad-'$cant')
            where nombre_prducto='bolsa de doritos'");
            echo"<script>alert('se ha realizado una compra de doritos')</script>";
            $pr1 = 500 *$cant;
            echo"<script>alert('$cant $opcion = $pr1')</script>";
          }if ($opcion=="bolsa de ramitas"){
            $rs=mysqli_query($cnn,"UPDATE productos
            set cantidad=(cantidad-'$cant')
            where nombre_prducto='bolsa de ramitas'");
            echo"<script>alert('se ha realizado una compra de una bolsa ramitas')</script>";
            $pr1 = 500 *$cant;
            echo"<script>alert('$cant $opcion = $pr1')</script>";
          }
          if ($opcion=="ensalada"){
            $rs=mysqli_query($cnn,"UPDATE productos
            set cantidad=(cantidad-'$cant')
            where nombre_prducto='ensalada'");
            echo"<script>alert('se ha realizado una compra de una ensalada')</script>";
            $pr1=1500 *$cant;
            echo"<script>alert('$cant $opcion = $pr1')</script>";
          }

          if($_POST['buscar']=="precios")
    {$rs=mysqli_query($cnn,"SELECT * FROM productos");
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
   </body>
</html>