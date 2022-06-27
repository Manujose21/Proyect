<?php 
require "Conexion.php";
$conecto = new Conexion();
$conexion = $conecto->getConn();

$fecha = '';
$dog= '';
$raza= '';
$sexo= '';
$edad_anio= '';
$edad_mes= '';
$name_own= '';
$participaciones= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM register_dog WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $fecha = $row['fecha'];
    $dog = $row['dog'];
    $raza = $row['raza'];
    $sexo = $row['sexo'];
    $edad_anio = $row['edad_anio'];
    $edad_mes = $row['edad_mes'];
    $name_own = $row['name_own'];
    $participaciones = $row['participaciones'];
  }
}

if (isset($_POST['update'])) {

  $id = $_GET['id'];

  $fecha = $_POST['fecha'];
  $dog = $_POST['dog'];
  $raza = $_POST['raza'];
  $sexo = $_POST['sexo'];
  $edad_anio = $_POST['edad_anio'];
  $edad_mes = $_POST['edad_mes'];
  $name_own = $_POST['name_own'];
  $participaciones = $_POST['participaciones'];

  $query = "UPDATE register_dog set fecha = '$fecha', dog = '$dog', raza = '$raza', sexo = '$sexo', edad_anio = '$edad_anio', edad_mes = '$edad_mes', name_own = '$name_own', participaciones = '$participaciones' WHERE id=$id";
  mysqli_query($conexion, $query);

  header('Location: concursoperros.php');
}

?>

<?php include "header.php"; ?>

<main>

<div class="container">

<form class="row g-3" action="actualizar_perro.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <h1 class="text-center">Actulizar datos del participante</h1>

    <div class="form-group col-md-6">
        <label for="fecha" class="form-label">Fecha de registro</label>
        <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fecha; ?>" required/>    
    </div> 
    
  <div class="form-group col-md-6">
    <label for="dog" class="form-label">Nombre del perro</label>
    <input type="text" class="form-control" id="dog" name="dog" value="<?php echo $dog; ?>" required />
  </div>

  <div class="form-group col-md-5">
    <label for="raza" class="form-label">Raza</label>
    <input type="text" class="form-control" id="raza" name="raza" value="<?php echo $raza; ?>" required />
  </div>

  <div class="form-group col-md-3">
    <label for="sexo" class="form-label">Sexo</label>
    <select class="form-select" id="sexo" name="sexo" required>
      <option selected><?php echo $sexo; ?></option>
      <?php
        if($sexo = "Macho"){
          echo '<option>Hembra</option>';
        } else {
          echo '<option>Macho</option>'; 
        }
      ?>
    </select>
  </div>

  <div class="form-group col-md-4">
  <label for="edad" class="form-label">Edad</label>
    <div class="input-group" id="edad">
        <input type="number" class="form-control" name="edad_anio" value="<?php echo $edad_anio; ?>" required />
        <select class="form-select" name="edad_mes" required>
            <option selected><?php echo $edad_mes; ?></option>
            <option value="1">1 mes</option>
            <option value="2">2 meses</option>
            <option value="3">3 meses</option>
            <option value="4">4 meses</option>
            <option value="5">5 meses</option>
            <option value="6">6 meses</option>
            <option value="7">7 meses</option>
            <option value="8">8 meses</option>
            <option value="9">9 meses</option>
            <option value="10">10 meses</option>
            <option value="11">11 meses</option>
            
        </select>
    </div>
  </div>
  
  <div class="form-group col-md-6">
    <label for="name_own" class="form-label">Nombre completo del dueño</label>
    <input type="text" class="form-control" id="name_own" name="name_own" value="<?php echo $name_own; ?>" required />
  </div>

  <div class="form-group col-md-3">
    <label for="participaciones" class="form-label">Concursos participados</label>
    <input type="number" class="form-control" id="participaciones" name="participaciones" value="<?php echo $participaciones; ?>" required />
  </div>

  <div class="col-10">
      <button class="btn-success" name="update">
          Update
      </button>
  </div>

  <div class="col-2">
  <a href="concursoperros.php" class="btn btn-primary">Volver</a>
  </div>
</form>

</div>

</main>


<?php include "footer.php"; ?>