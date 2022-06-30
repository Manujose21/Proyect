<?php
require_once("Model.php");
class lend_model extends Model{

    private $date_lend;
    private $limit_date;
    private $title_book;
    private $name_student;
    private $ci_student;
    private $telf_student;
    private $mail_student;
    private $id_lend;

    public function create($data = array()){
        foreach( $data as $key => $value ){
            $$key = $value;
        }

        $query = "INSERT INTO register_lends(date_lend, limit_date, title_book, name_student, ci_student) 
        VALUES ('$date_lend', '$limit_date', '$title_book', '$name_student', '$ci_student')";

        $this->set_query($query);
    }

    public function read( $id="" ){

        if($id != ""){
            $query = "SELECT * FROM register_lends WHERE id_lend = $id";
        }else{
            $query = "SELECT * FROM register_lends";
        }

        $results = $this->get_query($query);

        array_pop($results);

        return $results;
    }

    public function update($data = array()){

        foreach( $data as $key => $value ){
            $$key = $value;
        }
        $query = "UPDATE register_lends SET 
        date_lend = '$date_lend',
        limit_date = '$limit_date',
        title_book = '$title_book',
        name_student = '$name_student',
        ci_student = '$ci_student',
        ";
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

    public function delete($id = ""){
        $query = "DELETE FROM register_lends WHERE id_lend = $id";
        $this->set_query($query);
    }
}