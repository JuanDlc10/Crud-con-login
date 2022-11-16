<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "DELETE FROM t_evento WHERE id_evento = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    if ($respuesta) {
        header("location:../inicio.php");
    }else {
        echo 'No se pudo borrar el evento';
    }
?>