<?php
    include "./conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $evento = $_POST['evento'];
    $dia = $_POST['dia'];
    $idUsuario = $_SESSION['idUsuario'];
    $sql = "UPDATE t_evento SET nombre = '$evento',
                                fecha = '$dia' 
                                where id_evento = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    if ($respuesta) {
        header('location:../inicio.php');
    }else{
        echo "No se pudo actualizar el evento";
    }

