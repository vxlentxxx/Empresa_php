<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a php</title>
</head>
<body>
    <h1> Pagina principal del sitio <h1>
    <h2> achinti morales <h2>

    <form action = "modelo/loguear.php"  method = "post">
        <h3> Iniciar sesion <h3>
        <label for="">E-mail:</label>
        <input type= "text" name= "email" id="" require>
        <br><br> 
        <label for="">Password:</label>
        <input type= "text" name= "password" id="" require>
        <br><br> 
        <button type ="submit"> Ingresar </button>
    </form>

</body>
</html>