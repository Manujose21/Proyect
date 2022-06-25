<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>


<div class="container_form">
    
<form class="row g-1" action="" method="POST">

<h1 class="text-center">Registro de libros</h1>

<div class="form-group mb-3">
  <label for="book" class="form-label">Titulo del libro</label>
  <input type="text" class="form-control" id="book" name="book" placeholder="">
</div>


<div class="form-group mb-3">
  <label for="book" class="form-label">Disciplina</label>
  <input type="text" class="form-control" id="disciplina" name="disciplina" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
  <label for="book" class="form-label">Grado orientado</label>
  <input type="text" class="form-control" id="grado" name="grado" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
  <label for="book" class="form-label">Autor</label>
  <input type="text" class="form-control" id="autor" name="autor" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
  <label for="book" class="form-label">Editorial</label>
  <input type="text" class="form-control" id="editorial" name="editorial" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
    <label for="cantidad_libros" class="form-label">Cantidad de libros</label>
    <input type="number" class="form-control" id="cantidad_libros" name="cantidad_libros" required />
</div>

<div class="text-center">
    <input type="submit" name="save_lend" class="btn btn-success btn-block" value="Registrar libro"/>
  </div>

</form>
    
</div>

<?php include('./footer.php'); ?>