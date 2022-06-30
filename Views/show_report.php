<?php
include("./session.php");

if (isset($_SESSION['message'])) { ?>


<?php
require("../Controllers/Report_Controller.php");
$controller = new Report_Controller();
?>
<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>

<main class="container col-md-7">
    <?php



    if (isset($_POST['generate_report_lend'])) {
        $data = [];
        if (isset($_POST['filter_book'])) {
            $data["filter_book"] = $_POST['filter_book'];
        }

        if (isset($_POST['filter_ci'])) {

            $data["filter_ci"] = $_POST['filter_ci'];
        }

        if (isset($_POST['filter_book']) && isset($_POST['filter_ci'])) {
            print "<h2 class=''>Estudiantes con libros de " . $_POST['filter_book'] . " prestados, y cedula " . $_POST['filter_ci'] . ":</h2>";
        } else if (isset($_POST['filter_book'])) {
            print "<h2 class=''>Estudiantes con libros de " . $_POST['filter_book'] . " prestado:</h2>";
        } else if (isset($_POST['filter_ci'])) {
            print "<h2 class=''>Estudiante con cedula " . $_POST['filter_ci'] . " con prestamos</h2>";
        }

        $filter_result = $controller->read_lend($data);
        if (is_string($filter_result)) {
            echo $filter_result;
        } else {
            $filter_amount = count($filter_result);

            echo "
            <table class='table mt-4 text-center'>
                <thead>
                    <th>Nombre del estudiante</th>
                    <th>Cedula</th>
                    <th>Fecha de prestamo</th>
                </thead>
            ";
            for ($i = 0; $i < $filter_amount; $i++) {
                $original_date_lend = $filter_result[$i]["name_student"];
                $formated_date_lend = date("d/m/Y", strtotime($original_date_lend));

                echo "
                    <tr >
                        <td>" . $filter_result[$i]["name_student"] . "</td>
                        <td>" . $filter_result[$i]["ci_student"] . "</td>
                        <td>" . $formated_date_lend . "</td>
                    </tr>";
            }
            // name_student, ci_student, date_lend
            echo "</table>
                <p clas='p-3'><b>Registros encontrados:</b> " . $filter_amount . "</p>";
        }
    } else if (isset($_POST['generate_report_book'])) {

        $array_data = [];
        if (isset($_POST['filter_book'])) {

            $array_data['filter_book'] = $_POST['filter_book'];
        }
        if (isset($_POST['filter_author'])) {

            $array_data['filter_author'] = $_POST['filter_author'];
        }
        if (isset($_POST['filter_editorial'])) {

            $array_data['filter_editorial'] = $_POST['filter_editorial'];
        }
        // texto dinamico segun el tipo de filtrado 

        if (isset($_POST['filter_book']) && isset($_POST['filter_author']) && isset($_POST['filter_editorial'])) {

            print "<h1 class=''>Busqueda de libro: <b>" . $_POST['filter_book'] . "</b> autor: <b>" . $_POST['filter_author'] . "</b> editorial: <b>" . $_POST['filter_editorial'] . ":</b></h1>";
        } else if (isset($_POST['filter_book']) && isset($_POST['filter_author'])) {

            print "<h1 class=''>Busqueda de libro: <b>" . $_POST['filter_book'] . "</b> autor: <b>" . $_POST['filter_author'] . ":</b></h1>";
        } else if (isset($_POST['filter_book']) && isset($_POST['filter_editorial'])) {
            print "<h1 class=''>Busqueda de libro: <b>" . $_POST['filter_book'] . "</b> editorial: <b>" . $_POST['filter_editorial'] . ":</b></h1>";
        } else if (isset($_POST['filter_editorial']) && isset($_POST['filter_author'])) {

            print "<h1 class=''>Busqueda de libro con autor:<b>" . $_POST['filter_author'] . "</b> editorial: <b>" . $_POST['filter_editorial'] . ":</b></h1>";
        } else if (isset($_POST['filter_book'])) {

            print "<h1 class=''>Busqueda de libro: <b>" . $_POST['filter_book'] . ":</b></h1>";
        } else if (isset($_POST['filter_author'])) {

            print "<h1 class=''>Busqueda de libros con el autor: <b>" . $_POST['filter_author'] . ":</b></h1>";
        } else if (isset($_POST['filter_editorial'])) {

            print "<h1 class=''>Busqueda de libros con el autor: <b>" . $_POST['filter_editorial'] . ":</b></h1>";
        }

        // Resultados
        $filter_result = $controller->read_book($array_data);
        if (is_string($filter_result)) {

            echo $filter_result;
        } else {
            $filter_amount = count($filter_result);
            echo "
            <table class='table mt-4 text-center'>
                <thead>
                    <th>Libro</th>
                    <th>Disciplina</th>
                    <th>Grado orientado</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Cantidad</th>
                </thead>
            ";
            for ($i = 0; $i < $filter_amount; $i++) {
                echo "
                    <tr >
                        <td>" . $filter_result[$i]["title_book"] . "</td>
                        <td>" . $filter_result[$i]["discipline_book"] . "</td>
                        <td>" . $filter_result[$i]["level_book"] . "</td>
                        <td>" . $filter_result[$i]["author_book"] . "</td>
                        <td>" . $filter_result[$i]["editorial_book"] . "</td>
                        <td>" . $filter_result[$i]["amount_book"] . "</td>
                    </tr>";
            }
            echo "</table>
                <p clas='p-3'><b>Registros encontrados:</b> " . $filter_amount . "</p>";
        }
    }
    ?>
</main>
<?php include('./footer.php') ?>

<?php  } else {
  @header('Location: login.php');
}