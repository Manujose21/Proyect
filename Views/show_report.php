<?php 
    require("../Controllers/Report_Controller.php");
    $controller = new Report_Controller();  
?>

<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>

<main class="wrapper">
    <?php 
  
    
 
    if(isset($_POST['generate_report_lend'])){
        $data = [];
        if(isset($_POST['filter_book'])){
            $data["filter_book"] = $_POST['filter_book'];
        }

        if(isset($_POST['filter_ci'])){
    
            $data["filter_ci" ] = $_POST['filter_ci'];                
        }   

        if(isset($_POST['filter_book']) && isset($_POST['filter_ci']) ){
            print "<h1 class='display-6 fw-normal'>Estudiantes con libros de ".$_POST['filter_book']." prestados, y cedula ".$_POST['filter_ci'].":</h1>";
        }else if(isset($_POST['filter_book']) ){
            print "<h1 class='display-6 fw-normal'>Estudiantes con libros de ".$_POST['filter_book']." prestado:</h1>";
        }else if (isset($_POST['filter_ci'])){
            print "<h1 class='display-6 fw-normal'>Estudiante con cedula ".$_POST['filter_ci'] ." con prestamos</h1>";
        }
        
        
        $filter_result = $controller->read_lend($data);
        if(is_string($filter_result)){
            echo $filter_result;
        }else{
            $filter_amount = count($filter_result);
            
            echo "
            <table class='table mt-4'>
                <thead>
                    <th>Nombre del estudiante</th>
                    <th>Cedula</th>
                    <th>Fecha de prestamo</th>
                </thead>
            ";
            for ($i = 0; $i < $filter_amount; $i++) {
                echo "
                    <tr >
                        <td>" . $filter_result[$i]["name_student"] . "</td>
                        <td>" . $filter_result[$i]["ci_student"] . "</td>
                        <td>" . $filter_result[$i]["date_lend"] . "</td>
                    </tr>";
                }
                // name_student, ci_student, date_lend
            echo "</table>
                <p clas='p-3'><b>Total:</b> ".$filter_amount."</p>";
        }
    }
    else if(isset($_POST['generate_report_book'])){
        
        $array_data = [];
        if(isset($_POST['filter_book'])) {

           $array_data['filter_book'] = $_POST['filter_book'];
           
        }
        if(isset($_POST['filter_author'])) {

           $array_data['filter_author'] = $_POST['filter_author'];

        }
        if(isset($_POST['filter_editorial'])) {

            $array_data['filter_editorial'] = $_POST['filter_editorial'];

        }
        // texto dinamico segun el tipo de filtrado 

        if(isset($_POST['filter_book']) && isset($_POST['filter_author']) && isset($_POST['filter_editorial'])){

            print "<h1 class='display-6 fw-normal'>Busqueda de libro: <b>".$_POST['filter_book']."</b> autor: <b>".$_POST['filter_author']."</b> editorial: <b>".$_POST['filter_editorial'].":</b></h1>";

        }
        else if(isset($_POST['filter_book']) && isset($_POST['filter_author'])  ){

            print "<h1 class='display-6 fw-normal'>Busqueda de libro: <b>".$_POST['filter_book']."</b> autor: <b>".$_POST['filter_author'].":</b></h1>";

        }
        else if (isset($_POST['filter_book']) && isset($_POST['filter_editorial'])){
            print "<h1 class='display-6 fw-normal'>Busqueda de libro: <b>".$_POST['filter_book']."</b> editorial: <b>".$_POST['filter_editorial'].":</b></h1>";
        }
        else if(isset($_POST['filter_editorial']) && isset($_POST['filter_author'])){

            print "<h1 class='display-6 fw-normal'>Busqueda de libro con autor:<b>".$_POST['filter_author']."</b> editorial: <b>".$_POST['filter_editorial'].":</b></h1>";

        }
        else if(isset($_POST['filter_book'])) {

            print "<h1 class='display-6 fw-normal'>Busqueda de libro: <b>".$_POST['filter_book'].":</b></h1>";

        }
        else if(isset($_POST['filter_author'])) {

            print "<h1 class='display-6 fw-normal'>Busqueda de libros con el autor: <b>".$_POST['filter_author'].":</b></h1>";


        }
        else if(isset($_POST['filter_editorial'])) {

            print "<h1 class='display-6 fw-normal'>Busqueda de libros con el autor: <b>".$_POST['filter_editorial'].":</b></h1>";

        }
        
        // Resultados
        $filter_result = $controller->read_book($array_data);
        if(is_string($filter_result)) {

            echo $filter_result;
        }else{
            $filter_amount = count($filter_result);
            echo "
            <table class='table mt-4'>
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
                <p clas='p-3'><b>Total:</b> ".$filter_amount."</p>";
        }
    }   
    ?>
</main>
<?php include('./footer.php') ?>
