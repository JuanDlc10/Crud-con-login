<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $evento = $_POST['evento'];
    $dia = $_POST['dia'];
    $idUsuario = $_SESSION['idUsuario'];
    $sql = "INSERT INTO t_evento(id_usuario,nombre,fecha)
            VALUES('$idUsuario','$evento','$dia')";
    $respuesta = mysqli_query($conexion, $sql);
    if ($respuesta) {
        header('location:../inicio.php');
    }else{
        echo "No se pudo agregar el evento";
    }




















?>