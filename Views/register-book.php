<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>

<main>

<div class="container_form">
    
<form class="row g-1" action="" method="POST">

<h1 class="text-center">Registro de libros</h1>

<div class="form-group mb-3">
  <label for="book" class="form-label">Titulo del libro</label>
  <input type="text" class="form-control" id="title_book" name="title_book" placeholder="">
</div>


<div class="form-group mb-3">
  <label for="book" class="form-label">Disciplina</label>
  <input type="text" class="form-control" id="discipline_book" name="discipline_book" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
  <label for="book" class="form-label">Grado orientado</label>
  <input type="text" class="form-control" id="level_book" name="level_book" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
  <label for="book" class="form-label">Autor</label>
  <input type="text" class="form-control" id="author_book" name="author_book" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
  <label for="book" class="form-label">Editorial</label>
  <input type="text" class="form-control" id="editorial_book" name="editorial_book" placeholder="">
</div>

<div class="form-group mb-3 col-md-6">
    <label for="cantidad_libros" class="form-label">Cantidad de libros</label>
    <input type="number" class="form-control" id="amount_book" name="amount_book" required />
</div>

<div class="text-center">
    <input type="submit" name="submit_book" class="btn btn-success btn-block" value="Registrar libro"/>
  </div>

</form>
    
</div>

<?php 
				require("../Controllers/Book_Controller.php");
				$controller = new Book_Controller();
				if(isset($_POST['submit_book'])){
					if(strlen($_POST['title_book'] >=1 && 
					strlen($_POST['discipline_book'])>=1  && 
					strlen($_POST['level_book'])>=1  && 
					strlen($_POST['author_book'])>=1 &&
					strlen($_POST['editorial_book'])>=1 &&
					strlen($_POST['amount_book'])>=1)){
						$data = array(
							"title_book"  => $_POST['title_book'], 
							"discipline_book"   => $_POST['discipline_book'] ,
							"level_book"   => $_POST['level_book'] ,
							"author_book" => $_POST['author_book'],
							"editorial_book" => $_POST['editorial_book'] ,
							"amount_book" => $_POST['amount_book'], 
						);
						$controller->create($data);
					}
				}
			?>

</main>

<?php include('./footer.php'); ?>