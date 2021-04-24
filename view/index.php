<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">



    

</head>
<body>
    
    <form action="../controller/IniciarSesion.php" method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre :" required maxlength="15">
    <br>
    <input type="password" name="clave" id="algo" placeholder="clave :" required maxlength="10">
    <br>
    <input type="submit" value="Login">
    </form>


</body>
</html>