<?php

    require("conexion.php");

    // RECIBE LOS DATOS DE LA APP
    $nombre = $_POST['nombre'];
    $apellidopaterno = $_POST['apellidopaterno'];
    $apellidomaterno = $_POST['apellidopaterno'];
    $fecharegistro = $_POST['fecharegistro'];

    $productosregistrados = $_POST['productosregistrados'];
    $fotoperfil = $_POST['fotoperfil'];
    $numerosocinum = $_POST['numerosocinum'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $status = $_POST['status'];
    


    // VERIFICAMOS QUE NO ESTEN VACIAS LAS VARIABLES
    if(empty($usuario) || empty($contrasena) || empty($nombre)) {

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1";

    } else {

        // CREAMOS LA CONSULTA
        $sql = "INSERT INTO usuario VALUES('', '$nombre', '$apellidopaterno', '$apellidomaterno', '$fecharegistro', '$productosregistrados', '$fotoperfil', '$usuario', '$contraseña', '$numerosocinum', '$status')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "MENSAJE";

        }
        
    }

?>