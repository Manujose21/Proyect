<?php

require('../Controllers/Lend_Controller.php');
$controller = new Lend_Controller();

$lends_array = $controller->read();

?>

<?php

        if (isset($_POST['update_lend'])) {

            $id_lend = $lends_array[$_GET['id']]["id_lend"];
        
            $date_lend = $_POST['date_lend'];
            $limit_date = $_POST['limit_date'];
            $title_book = $_POST['title_book'];
            $name_student = $_POST['name_student'];
            $ci_student = $_POST['ci_student'];
            $telf_student = $_POST['telf_student'];
            $mail_student = $_POST['mail_student'];
        
            $queryU = "UPDATE register_lends SET 
            date_lend = '$date_lend',
            limit_date = '$limit_date',
            title_book = '$title_book',
            name_student = '$name_student',
            ci_student = '$ci_student',
            telf_student = '$telf_student',
            mail_student = '$mail_student' WHERE id_lend = $id_lend";

            $conexion = $controller->update();
            mysqli_query($conexion, $queryU);
            header('Location: table_lend.php');
        }
?>

<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>


<main>
  
<div class="container_form">
    
<form class="row g-1" action="" method="POST">

  <h1 class="text-center">Registro de prestamo</h1>
  <div class="form-group mb-3 col-md-6">
      <label for="fecha" class="form-label">Fecha de registro</label>
      <input type="date" class="form-control" id="date_lend" name="date_lend" value="<?php echo $lends_array[$_GET['id']]['date_lend']; ?>" required/>    
  </div> 

  <div class="form-group mb-3 col-md-6">
      <label for="fecha" class="form-label">Fecha Limite</label>
      <input type="date" class="form-control" id="limit_date" name="limit_date" value="<?php echo $lends_array[$_GET['id']]['limit_date']; ?>" required/>    
  </div> 

  <div class="form-group mb-3">
    <label for="book" class="form-label">Libro prestado</label>
    <input type="text" class="form-control" id="title_book" name="title_book" value="<?php echo $lends_array[$_GET['id']]['title_book']; ?>">
  </div>

  <div class="form-group mb-3">
    <label for="name_student" class="form-label">Nombre del estudiante</label>
    <input type="text" class="form-control" id="name_student" name="name_student" value="<?php echo $lends_array[$_GET['id']]['name_student']; ?>">
  </div>

  <div class="form-group col-md-6">
      <label for="cedula" class="form-label">Cedula del estudiante</label>
      <input type="number" class="form-control" id="ci_student" name="ci_student" value="<?php echo $lends_array[$_GET['id']]['ci_student']; ?>" required />
  </div>

  <div class="form-group col-md-6">
    <label for="telf" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="telf_student" name="telf_student" placeholder="0000-0000000" value="<?php echo $lends_array[$_GET['id']]['telf_student']; ?>">
  </div>


  <div class="form-group mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" id="mail_student" name="mail_student" placeholder="name@example.com" value="<?php echo $lends_array[$_GET['id']]['mail_student']; ?>">
  </div>

  <div class="text-center">
      <input type="submit" name="update_lend" class="btn btn-success btn-block" value="Actualizar prestamo"/>
  </div>

</form>
    
</div>

</main>

<?php include('./footer.php'); ?>
