<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>


<main>
<div class="container_form">
    
<form class="row g-1" action="" method="POST">

<h1 class="text-center">Registro de prestamo</h1>
<div class="form-group mb-3">
    <label for="fecha" class="form-label">Fecha de registro</label>
    <input type="date" class="form-control" id="fecha" name="fecha" required/>    
</div> 

<div class="form-group mb-3">
  <label for="book" class="form-label">Libro prestado</label>
  <input type="text" class="form-control" id="book" name="book" placeholder="">
</div>

<div class="form-group mb-3">
  <label for="name_student" class="form-label">Nombre del estudiante</label>
  <input type="text" class="form-control" id="name_student" name="name_student" placeholder="">
</div>

<div class="form-group col-md-6">
    <label for="cedula" class="form-label">Cedula del estudiante</label>
    <input type="number" class="form-control" id="cedula" name="cedula" required />
</div>

<div class="form-group col-md-6">
  <label for="telf" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telf" name="telf" placeholder="0000-0000000">
</div>


<div class="form-group mb-3">
  <label for="email" class="form-label">Correo</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
</div>

<div class="text-center">
    <input type="submit" name="save_lend" class="btn btn-success btn-block" value="Registrar prestamo"/>
  </div>

</form>
    
</div>


</main>

<?php include('./footer.php'); ?>