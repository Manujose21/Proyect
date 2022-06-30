<?php
include("./session.php");

if (isset($_SESSION['message'])) { ?>

    <?php
    require('../Controllers/Binnacle_Controller.php');
    $controller = new Binnacle_Controller();

    $binnacle_array = $controller->read();
    ?>
    <?php include('./header.php'); ?>
    <?php include('./nav-bar.php') ?>

    <main class="container col-md-3">

        <h1 class="text-center m-3">Bitacora</h1>

        <?php
        $num = count($binnacle_array);

        echo "<form method='post'>
            <table class='table text-center'>
                <thead>
                    <th>Actividad</th>
                    <th>Usuario</th>
                </thead>";
        for ($i = 0; $i < $num; $i++) {
            $original_date_activity =  $binnacle_array[$i]["date_activity"];
            $formated_date_activity = date("d/m/Y H:i:s", strtotime($original_date_activity));

            echo "<tr>
                        <td>" . $formated_date_activity . "</td>
                        <td>" . $binnacle_array[$i]["user"] . "</td>
                    </tr>";
        }
        ?>

        </table>

        </form>

    </main>

    <?php include('./footer.php'); ?>

<?php  } else {
    @header('Location: login.php');
}