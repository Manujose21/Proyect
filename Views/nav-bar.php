<?php include("./session.php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarsExample08">
      <ul class="navbar-nav">
        <li class="nav-item ms-5 me-5">
          <a class="nav-link" aria-current="page" href="main.php">Sistema prestamo</a>
        </li>
        <li class="nav-item ms-5 me-5">
          <a class="nav-link" href="maintenance.php">Mantenimiento</a>
        </li>
        <li class="nav-item dropdown ms-5 me-5">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Registros</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="./table_book.php">Tabla de libros</a></li>
            <li><a class="dropdown-item" href="./table_lend.php">Tabla de prestamos</a></li>
            <li><a class="dropdown-item" href="./binnacle.php">Bitacora</a></li>
          </ul>
        </li>
        <?php if (isset($_SESSION['message'])) { ?>
          <div>
            <li class="nav-item dropdown ms-5 me-5">
              <a class="nav-link dropdown-toggle sesion" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false"><img src="../public/images/usuario.png" id="marcador" class="icono" height="25px" width="25px"> <?= $_SESSION['message'] ?></a>
              <a class="nav-link-toggle" href=""></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="session.php?close_session=1" name="close_session">Cerrar sesion</a></li>
              </ul>
            </li>
          </div>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>