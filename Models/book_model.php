<?php
require_once("Model.php");

class book_model extends Model
{

    private $title_book;
    private $discipline_book;
    private $level_book;
    private $author_book;
    private $editorial_book;
    private $amount_book;
    private $past_contests;
    private $id_book;

    public function create($data = array())
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        $query = "INSERT INTO register_books(title_book, discipline_book, level_book, author_book, editorial_book, amount_book) 
        VALUES ('$title_book','$discipline_book','$level_book','$author_book', '$editorial_book', '$amount_book')";

        $this->set_query($query);
    }

    public function read($id = "")
    {

        if ($id != "") {
            $query = "SELECT * FROM register_books WHERE id_book = $id";
        } else {
            $query = "SELECT * FROM register_books";
        }

        $results = $this->get_query($query);

        array_pop($results);

        return $results;
    }

    public function update($data = array())
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $query = "UPDATE register_books SET 
        title_book = '$title_book',
        discipline_book = '$discipline_book',
        level_book = '$level_book',
        author_book = '$author_book',
        editorial_book = '$editorial_book',
        amount_book = '$amount_book' WHERE id_book = $id_book";

        $this->set_query($query);
    }

    public function getConn() {
        $conexion = mysqli_connect(
           'localhost',
           'root',
           '',
           'loan_system'
         );
         return $conexion;
      }

    public function delete($id = "")
    {
        $query = "DELETE FROM register_books WHERE id_book = $id";
        $this->set_query($query); 
    }
}