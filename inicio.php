<?php session_start();

    if (isset($_SESSION['usuario'])) {
        include "./backend/conexion.php";
        include "./header.php";
        $conexion = conexion();
?>


    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Eventos</h2>
                    <a href="./agregar.php" class="btn btn-outline-primary">
                        Agregar nuevo evento
                    </a>
                    <?php include "./tabla.php" ?>
                    <div style="text-align: right;"">
                        <a href="./backend/logout.php" class="btn btn-outline-primary">
                            Salir del sistema
                        </a>
                    </div>
            </div>
        </div>
    </div>





<?php 
include "./footer.php"; 
}else{
    header('location:./index.php');
}
?>