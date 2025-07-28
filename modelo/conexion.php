<?php
    // script para crear una conexion con la BD

    //Parametros requeridos para la conexion la BD

    // Parámetros BD local
    DEFINE('USER', 'root'); //Crea la constante USER con valor 'root'
    DEFINE('PW', '');
    DEFINE('HOST', 'localhost');
    DEFINE('BD', 'Empresa');

    // Parámetros BD remota (infinityfree.com)
    /*DEFINE('USER', 'if0_38542106t'); //Crea la constante USER con valor 'if0_38542106'
    DEFINE('PW', 'Vc9VaARJlSivktu');
    DEFINE('HOST', 'sql306.infinityfree.com');
    DEFINE('BD', 'if0_38542106_empresa');*/

    // Conexion con la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD);

    // Establecer conjunto de caracteres para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    // verificar la conexion con la BD
    if(!$conexion)
    {
        die("La conexión con la BD falló: " + mysqli_error($conexion));
        exit();
    }
    /*else
    {
        die("Conexión exitosa a la BD!");
    }*/
?>