<?php include "./header.php"; ?>




<section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="text-center my-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            </div>
                            <form action="./backend/agregar.php" method="post">
                                <input type="text" name="evento" id="evento" class="form-control my-4 py-2" placeholder="Evento">
                                <label for="dia">Dia del evento</label>
                                <input type="date" name="dia" id="dia" class="form-control" placeholder="Dia">
                                <div class="text-center mt-3">
                                    <button class="btn btn-outline-primary">Agregar</button>
                                    <a href="./inicio.php" class="btn btn-outline-primary">
                                        Inicio
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>















<?php include "./footer.php"; ?>
