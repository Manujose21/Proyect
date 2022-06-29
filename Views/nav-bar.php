<?php include("./session.php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item ms-5 me-5">
            <a class="nav-link" aria-current="page" href="main.php">Principal</a>
          </li>
          <li class="nav-item ms-5 me-5">
            <a class="nav-link" href="maintenance.php">Mantenimiento</a>
          </li>
          <li class="nav-item dropdown ms-5 me-5">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Registros</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="#">Tabla de libros</a></li>
              <li><a class="dropdown-item" href="#">Tabla de prestamos</a></li>
              <li><a class="dropdown-item" href="binnacle.php">Bitacora</a></li>
            </ul>
          </li>
                <!-- MESSAGES -->

                <?php if (isset($_SESSION['message'])) { ?>
                <div>
                <li class="nav-item ms-5 me-5">
                  <a class="nav-link" href=""><img src="../public/images/usuario.png" id="marcador" class="icono" height="25px" width="25px"> <?= $_SESSION['message']?></a>
                </li>
                </div>

              <?php  } ?>
              <!-- session_unset(); -->
        </ul>
      </div>
    </div>
</nav>