<html>
<link rel="stylesheet" href="style.css">
  <head>
    <title>Registro</title>
  </head>
  <?php error_reporting(0);?>
  <body>
  <br>
    <div class="main-block">
       <center><img src="logo.png"></center>
      <form method="post">
        <hr>
        <center>Selecione Si es Estudiante, Funcionario o Administrador</center>
        <select name="Opcion">
               <option hidden selected>Selecciona una opción</option>
               <option value="1">Funcionario</option>
               <option value="2">Alumno</option>
               <option value="3">Mozo</option>
               <option value="4">Administrador</option>
               
          </select>
        <hr>
        <div class="btn-block">
        <input type="submit" name="btnIngresar" value="Ingresar">
        </div>
      </form>
    </div> 
    <?php
    if ($_POST['btnIngresar']=="Ingresar") {
        $opt=$_POST['Opcion'];
        switch ($opt) {
            case 1:
                echo "<script type='text/javascript'>window.location='funcionario/LoginProfe.php'</script>";
                break;
            case 2:
                echo "<script type='text/javascript'>window.location='MenuDeAlumnos.php'</script>";
                break;
            case 3:
                echo "<script type='text/javascript'>window.location='mozo/LoginMozo.php'</script>";
                break;
            case 4:
              echo "<script type='text/javascript'>window.location='MenuAdmin/LoginAdmin.php'</script>";
              break;                                  
            default:
                echo "<script>alert('Seleccione Opcion Valida')</script>";
                break;
        }
          }
    ?>
  </body>
</html>