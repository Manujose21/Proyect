<?php
include("./session.php");

if (isset($_SESSION['message'])) { ?>

<?php
require('../Controllers/Lend_Controller.php');
$controller = new Lend_Controller();

$lends_array = $controller->read();
?>
<?php include('./header.php'); ?>
<?php include('./nav-bar.php') ?>
<main class="container col-md-10">

    <a href="table_book.php" class="btn btn-primary">Tabla de libros</a>

    <a href="register-lend.php" class="btn btn-secondary">Registrar prestamo</a>

    <h1 class="text-center m-3">Tabla de prestamos</h1>

    <?php
    $num = count($lends_array);


    echo "<form method='post'>
            <table class='table text-center'>
                <thead>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Fecha limite</th>
                    <th>Libro</th>
                    <th>Estudiante</th>
                    <th>CI del estudiante</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </thead>";
    for ($i = 0; $i < $num; $i++) {
        $original_date_lend = $lends_array[$i]["date_lend"];
        $formated_date_lend = date("d/m/Y", strtotime($original_date_lend));

        $original_limit_date = $lends_array[$i]["limit_date"];
        $formated_limit_date = date("d/m/Y", strtotime($original_limit_date));

        echo "<tr>
                        <td>" . $lends_array[$i]["id_lend"] . "</td>
                        <td>" . $formated_date_lend . "</td>
                        <td>" . $formated_limit_date . "</td>
                        <td>" . $lends_array[$i]["title_book"] . "</td>
                        <td>" . $lends_array[$i]["name_student"] . "</td>
                        <td>" . $lends_array[$i]["ci_student"] . "</td>
                        <td>"; ?><a href="update_lend.php?id=<?php echo $i;?>" class="boton1"><img src="../public/images/marcador.png" id="marcador" class="icono" height="20px" width="20px"></a></td>
    <?php echo "<td><input type='radio' value=" . $lends_array[$i]["id_lend"] . " name='delete'></td>
                    </tr>";
    }
    ?>

    </table>
    <p class='p-style'> <b>Total de registros:</b> <?php echo "$num"; ?></p>

    <input type='submit' class='btn btn-danger btn-block' value='Eliminar' name='submit-delete'>

    </form>

    <?php
    if (isset($_POST['submit-delete'])) {
        if (isset($_POST['delete'])) {
            $controller->delete($_POST['delete']);
            @header('Location: table_lend.php');
        }
    }
    ?>

</main>

<?php include('./footer.php'); ?>

<?php  } else {
  @header('Location: login.php');
}