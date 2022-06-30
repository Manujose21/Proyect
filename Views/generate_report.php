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

        <?php if (isset($_POST['generate'])) {
            if ($_POST["report_name"] == "lend") {
        ?>
                <h1 class="text-center mb-4">Filtrar prestamo</h1>
                <form action="./show_report.php" method="post" class="card p-5 shadow">
                    <div class="row">
                        <div class="col-12 col-md-6 ">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="for-book">
                                <label class="form-check-label" for="for-book">Filtrar por titulo del libro</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="for-ci">
                                <label class="form-check-label" for="for-ci">Filtrar por cedula</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 " id="inputs">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-success w-25" name="generate_report_lend" id="submit-btn" disabled="true">
                    </div>
                </form>
            <?php } else { ?>
                <h1 class="text-center">Filtrar por titulo de libro, Autor o Editorial</h1>
                <form action="./show_report.php" method="post" class="card p-5 shadow">
                    <div class="row">
                        <div class="col-12 col-md-6 ">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="for-book">
                                <label class="form-check-label" for="for-book">Filtrar por titulo del libro</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="for-author">
                                <label class="form-check-label" for="for-author">Filtrar por autor</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="for-editorial">
                                <label class="form-check-label" for="for-editorial">Filtrar por editorial</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 " id="inputs">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-success w-25" name="generate_report_book" id="submit-btn" disabled="true">
                    </div>
                </form>
            <?php } ?>
        <?php } ?>

    </main>

    <?php include('./footer.php'); ?>

<?php  } else {
    @header('Location: login.php');
}