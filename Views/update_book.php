<?php
include("./session.php");

if (isset($_SESSION['message'])) { ?>
<?php

require('../Controllers/Book_Controller.php');

$controller = new Book_Controller();

$books_array = $controller->read();

?><?php
        if (isset($_POST['update_book'])) {

            $id_book = $books_array[$_GET['id']]["id_book"];
        
            $title_book = $_POST['title_book'];
            $discipline_book = $_POST['discipline_book'];
            $level_book = $_POST['level_book'];
            $author_book = $_POST['author_book'];
            $editorial_book = $_POST['editorial_book'];
            $amount_book = $_POST['amount_book'];
        
            $query = "UPDATE register_books SET 
            title_book = '$title_book',
            discipline_book = '$discipline_book',
            level_book = '$level_book',
            author_book = '$author_book',
            editorial_book = '$editorial_book',
            amount_book = '$amount_book' WHERE id_book = $id_book";

            $conexion = $controller->update();
            mysqli_query($conexion, $query);
            header('Location: table_book.php');
        }
?><?php include('./header.php'); ?>
<?php include('./nav-bar.php') ?>
<main>

    <div class="container col-md-6">

        <form class="row g-1"  method="POST">

            <h1 class="text-center">Registro de libros</h1>

            <div class="form-group mb-3">
                <label for="book" class="form-label">Titulo del libro</label>
                <input type="text" class="form-control" id="title_book" name="title_book" value="<?php echo $books_array[$_GET['id']]['title_book']; ?>">
            </div>


            <div class="form-group mb-3">
                <label for="book" class="form-label">Disciplina</label>
                <input type="text" class="form-control" id="discipline_book" name="discipline_book" value="<?php echo $books_array[$_GET['id']]["discipline_book"]; ?>">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="book" class="form-label">Grado orientado</label>
                <input type="text" class="form-control" id="level_book" name="level_book" value="<?php echo $books_array[$_GET['id']]["level_book"]; ?>">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="book" class="form-label">Autor</label>
                <input type="text" class="form-control" id="author_book" name="author_book" value="<?php echo $books_array[$_GET['id']]["author_book"]; ?>">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="book" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial_book" name="editorial_book" value="<?php echo $books_array[$_GET['id']]["editorial_book"]; ?>">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="cantidad_libros" class="form-label">Cantidad de libros</label>
                <input type="number" class="form-control" id="amount_book" name="amount_book" value="<?php echo $books_array[$_GET['id']]["amount_book"]; ?>" required />
            </div>

            <div class="text-center">
                <input type="submit" name="update_book" class="btn btn-success btn-block" value="Actualizar libro" />
            </div>

        </form>

    </div>

</main>

<?php include('./footer.php'); ?>

<?php  } else {
  @header('Location: login.php');
}