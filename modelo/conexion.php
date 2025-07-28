<?php
    // script para crear una conexión con la BD

    // Parametros requeridos para la conexión con la BD

    // Parametros BD local
    DEFINE('USER', 'root'); //  Crea la constante USER con valor 'root'
    DEFINE('PW', '');
    DEFINE('HOST', 'localhost');
    DEFINE('BD', 'Empresa');

    // Parametros BD remota (infinityfree)
    /*DEFINE('USER', 'if0_38542096'); //  Crea la constante USER con valor 'root'
    DEFINE('PW', 'Sebast2009feo');
    DEFINE('HOST', 'sql100.infinityfree.com');
    DEFINE('BD', 'if0_38542096_empresa');*/

    // Conexión con la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD); 

    // Establecer conjunto de caracteres para el hosting
    mysqli_set_charset($conexion, 'utf8mb4'); 

    // Verificar la conexión con la BD

if (!$conexion) 
    {
        die("La conexión con la BD falló: " + mysqli_error($conexion));  
        exit();
    } 
    /*else 
    {
        die("Conexión a la BD exitosa!"); 
    }*/
?>