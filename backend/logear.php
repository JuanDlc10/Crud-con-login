<?php session_start();
    include "./conexion.php";
    $conexion = conexion();

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM t_usuario
    WHERE usuario = '$usuario'
    AND password = '$password'";

    $respuesta = mysqli_query($conexion, $sql);
    if ( mysqli_num_rows($respuesta) > 0 ) {
        
        $idUsuario = mysqli_fetch_array($respuesta)['id'];
        $_SESSION['idUsuario'] = $idUsuario;

        $_SESSION['usuario'] = $usuario;
        header('location:../inicio.php');
    }else{
        header('location:../index.php');
    }




?>