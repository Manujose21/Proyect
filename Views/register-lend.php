<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>


<main>
  
<div class="container_form">
    
<form class="row g-1" action="" method="POST">

  <h1 class="text-center">Registro de prestamo</h1>
  <div class="form-group mb-3 col-md-6">
      <label for="fecha" class="form-label">Fecha de registro</label>
      <input type="date" class="form-control" id="date_lend" name="date_lend" required/>    
  </div> 

  <div class="form-group mb-3 col-md-6">
      <label for="fecha_limite" class="form-label">Fecha limite</label>
      <input type="date" class="form-control" id="=limit_date" name="limit_date" required/>    
  </div>

  <div class="form-group mb-3">
    <label for="book" class="form-label">Libro prestado</label>
    <input type="text" class="form-control" id="title_book" name="title_book" placeholder="">
  </div>

  <div class="form-group mb-3 col-md-6">
    <label for="name_student" class="form-label">Nombre del estudiante</label>
    <input type="text" class="form-control" id="name_student" name="name_student" placeholder="">
  </div>

  <div class="form-group col-md-6">
      <label for="cedula" class="form-label">Cedula del estudiante</label>
      <input type="number" class="form-control" id="ci_student" name="ci_student" required />
  </div>

  <div class="text-center">
      <input type="submit" name="submit_lend" class="btn btn-success btn-block" value="Registrar prestamo"/>
  </div>

</form>
    
</div>

<?php 
				require("../Controllers/Lend_Controller.php");
				$controller = new Lend_Controller();
				if(isset($_POST['submit_lend'])){
					if(strlen($_POST['date_lend'] >=1 &&
          strlen($_POST['limit_date'])>=1  && 
					strlen($_POST['title_book'])>=1  && 
					strlen($_POST['name_student'])>=1  && 
					strlen($_POST['ci_student'])>=1)){
						$data = array(
							"date_lend"  => $_POST['date_lend'], 
              "limit_date"  => $_POST['limit_date'], 
							"title_book"   => $_POST['title_book'] ,
							"name_student"   => $_POST['name_student'] ,
							"ci_student" => $_POST['ci_student'],
						);
						$controller->create($data);
					}	
				}
			?>

</main>

<?php include('./footer.php'); ?>