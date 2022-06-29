<?php
include("./session.php");

if (isset($_SESSION['message'])) { ?>


  <?php include('./header.php'); ?>

  <?php include('./nav-bar.php') ?>

  <main class="wrapper mb-5">

    <h1 class="text-center mb-5">Sistema de prestamos</h1>

    <div class="row">
      <div class="col-12 col-md-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Registros</h5>
            <p class="card-text">Agrega, elimina y filtra los datos almacenados en el sistema.</p>
          </div>
          <div class="card-footer d-flex justify-content-around ">
            <a href="table_book.php" class="btn btn-primary w-50 me-2">Registros de libros</a>
            <a href="table_lend.php" class="btn btn-primary w-50">Registros de prestamos</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3">
        <div class="card ">
          <div class="card-body">
            <h5 class="card-title">Generar reportes</h5>
            <p class="card-text">Filtra de forma personalizada las transacciones que se han realizado en el sistema..</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@getbootstrap">Generar</a>
          </div>
        </div>
      </div>
    </div>

    <div class="input-group mb-5 mt-3">
      <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
    </div>

    <div class="space-container-big"></div>

  </main>

  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generar reporte</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div>
              <label for="select-report" class="col-form-label">Seleccione tipo de reporte a generar:</label>
              <select class="form-select" aria-label="Default select example" class="form-control" id="select-report">
                <option selected></option>
                <option value="1">Reporte de prestamos</option>
                <option value="2">Reporte de morosos</option>
                <option value="3">Reporte de Libros</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Generar</button>
        </div>
      </div>
    </div>
  </div>

  <?php include('./footer.php'); ?>



<?php  } else {
  header('Location: login.php');
} ?>