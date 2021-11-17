<html>
<link rel="stylesheet" href="style.css">
   <head>
       <title>Inicio Administrador</title> 
   </head>
    <body>
    <div class="main-block">
       <center><img src="logo.png"></center>
     <?php error_reporting(0);?>
     <form action="" method="post">
     <hr>
     <center>Ingrese Usuario Administrador</center>
     <?php
            if ($_POST['btnIngreso']=="Ingresar") {
                    include("funcion.php");
                    $cnn = Conectar();
                    $nam = $_POST['txtUsuario'];
                    $pas = ($_POST['txtContra']);
                    $rs = mysqli_query($cnn, " select * from admin where Nombre='$nam' AND Contraseña = '$pas'");
                        if ($row = mysqli_num_rows($rs) != 0) {
                            if($row = mysqli_fetch_array($rs)){
                                $rut = $row[1];
                                $nom = $row[2];
                                $ape = $row[3];
                                echo "<script>alert('Ingresando')</script>";
                                echo "<script type='text/javascript'>window.location='MenuAdmin.php'</script>";            
                            }
                            }else{
                                echo "<script>alert('Rut o Contraseña incorrecta')</script>";
                    }
            }
         ?>  
        <center>
         <table border="0">
         <hr>

        <tr>
             <td> Usuario:</td>
             <td><input type="text" name="txtUsuario" value="" maxlength="50" size=""></td>
        </tr>
        <tr>
             <td> Contraseña:</td>
             <td><input type="password" name="txtContra" value="" maxlength="50" size=""> </td>
        </tr>
        <tr>
             <div class="btn-block">
            <td></td>
                    <td><input type="submit" name="btnIngreso" value="Ingresar"></td>
            </div>
         </tr>
        </table>
     </form>
                <input type="button" value="Menu Principal" onClick="window.location.href='../Index.php'">
     </div>  
    </body>
 </html>