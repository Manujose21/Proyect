<?php 

require_once("../Models/book_model.php");

class Book_Controller{

    private $book;

    public function __construct(){
        $this->book = new book_model();
    }

    public function create($data){
        $this->book->create($data);
        header('Location: table_book.php');
    }
    public function read(){
        return $this->book->read();
    }
    public function update(){
        return $this->book->getConn();
        header('Location: table_book.php');
    }
    public function delete($id){
        $id_int = intval($id);
        $this->book->delete($id_int);
        header('Location: table_book.php');
    }
}