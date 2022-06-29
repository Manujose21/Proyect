<?php
require('../Controllers/Binnacle_Controller.php');
$controller = new Binnacle_Controller();

$binnacle_array = $controller->read();
?>

<?php include('./header.php'); ?>

<?php include('./nav-bar.php') ?>



<main class="container">
    
    <h1 class="text-center m-3">Bitacora</h1>

    <?php
    $num = count($binnacle_array);

    echo "<form method='post'>
            <table class='table'>
                <thead>
                    <th>Actividad</th>
                    <th>Usuario</th>
                </thead>";
    for ($i = 0; $i < $num; $i++) {
        echo "<tr>
                        <td>" . $binnacle_array[$i]["date_activity"] . "</td>
                        <td>" . $binnacle_array[$i]["user"] . "</td>
                    </tr>";
    }
    ?>

    </table>

    </form>

</main>

<?php include('./footer.php'); ?>