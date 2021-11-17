<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Administrador</title>
</head>
<body>
    <div class="main-block">
       <form method="post">
        <hr>
        <h1>Administrador</h1>
        <hr>
        <br> <br>
        <div class="btn-block">
        <br> <br>
        <input type="button" value="Ver Inventario" onClick="window.location.href='buscar.php'">
        <br> <br>
        <input type="button" value="Agregar a Inventario" onClick="window.location.href='agregarinventario.php'">
        <br> <br>
        <input type="button" value="Mostrar cuenta funcionario" onClick="window.location.href='mostrarcuenta.php'">
        <br> <br>
        <input type="button" value="Mostrar Total Vendido" onClick="window.location.href='Total.php'">
        <br> <br>
        <input type="button" value="Menu Principal" onClick="window.location.href='../Index.php'">
        </div> 
</form>
</body>
</html>