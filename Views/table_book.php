<?php
include("./session.php");

if (isset($_SESSION['message'])) { ?>

    <?php
    require('../Controllers/Book_Controller.php');
    $controller = new Book_Controller();

    $books_array = $controller->read();
    ?>

    <?php include('./header.php'); ?>

    <?php include('./nav-bar.php') ?>

    <main class="container col-md-10">

        <a href="table_lend.php" class="btn btn-primary">Tabla de prestamos</a>

        <a href="register-book.php" class="btn btn-secondary">Registrar libro</a>

        <h1 class="text-center m-3">Tabla de libros</h1>

        <?php
        $num = count($books_array);

        echo "<form method='post'>
            <table class='table text-center'>
                <thead>
                    <th>ID</th>
                    <th>Libro</th>
                    <th>Disciplina</th>
                    <th>Grado orientado</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Cantidad en existencia</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </thead>";
        for ($i = 0; $i < $num; $i++) {
            echo "<tr>
                        <td>" . $books_array[$i]["id_book"] . "</td>
                        <td>" . $books_array[$i]["title_book"] . "</td>
                        <td>" . $books_array[$i]["discipline_book"] . "</td>
                        <td>" . $books_array[$i]["level_book"] . "</td>
                        <td>" . $books_array[$i]["author_book"] . "</td>
                        <td>" . $books_array[$i]["editorial_book"] . "</td>
                        <td>" . $books_array[$i]["amount_book"] . "</td>
                        <td>";?><a href="update_book.php?id=<?php echo $i;?>" class="boton1"><img src="../public/images/marcador.png" id="marcador" class="icono" height="20px" width="20px"></a></td>
        <?php echo "<td><input type='radio' value=" . $books_array[$i]["id_book"] . " name='delete'></td>
                    </tr>";
            /* ?id_book=<?php echo $books_array[$i]['id_book'] ?> */
        }
        ?>

        </table>
        <p class="p-style"> <b>Total de registros:</b> <?php echo "$num"; ?></p>

        <input type="submit" class="btn btn-danger btn-block" value="Eliminar" name="submit-delete">

        </form>

        <?php
        if (isset($_POST['submit-delete'])) {
            if (isset($_POST['delete'])) {
                $controller->delete($_POST['delete']);
                @header('Location: table_book.php');
            }
        }
        ?>

    </main>

    <?php include('./footer.php'); ?>

<?php  } else {
    @header('Location: login.php');
}