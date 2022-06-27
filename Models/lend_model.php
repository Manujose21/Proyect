<?php
require_once("Model.php");

class lend_model extends Model{

    private $date_lend;
    private $title_book;
    private $name_student;
    private $ci_student;
    private $telf_student;
    private $mail_student;
    private $past_contests;

    public function create($data = array()){
        foreach( $data as $key => $value ){
            $$key = $value;
        }

        $query = "INSERT INTO register_lends(date_lend, title_book, name_student, ci_student, telf_student, mail_student) 
        VALUES ('$date_lend','$title_book','$name_student','$ci_student', '$telf_student', '$mail_student')";

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
        title_book = '$title_book',
        name_student = '$name_student',
        ci_student = '$ci_student',
        telf_student = '$telf_student',
        mail_student = '$mail_student',
        past_contest = $past_contests
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