<?php
require_once("../Models/report_model.php");
class Report_Controller{

    private $report;

    public function __construct(){
        $this->report = new report_model();
    }

    
    public function read_lend($data = array()){
        foreach( $data as $key => $value ){
            $$key = $value;
        }
        
        if(isset($filter_book)  && isset($filter_ci) ){

            $query = "SELECT name_student, ci_student, date_lend FROM register_lends WHERE title_book = '$filter_book' AND ci_student = '$filter_ci'";

        }else if(isset($filter_book)  ){

            $query = "SELECT name_student, ci_student, date_lend FROM register_lends WHERE title_book = '$filter_book'";

        }else if(isset($filter_ci) ){

            $query = "SELECT name_student, ci_student, date_lend FROM register_lends WHERE ci_student = '$filter_ci'";

        }

        $data = $this->report->filter($query);
        array_pop($data);

        if(empty($data)){
            return "
            <div class='alert alert-danger mt-3 ' role='alert'>
                No se ha encontrado ningun registro
            </div>";
        }else{
        
            return $data;
        }
    }
   
    public function read_book($data = array()){
        foreach( $data as $key => $value ){
            $$key = $value;
        }
        $query="";
        if(isset($filter_book)  && isset($filter_author) && isset($filter_editorial) ){

            $query = "SELECT * FROM register_books WHERE title_book = '$filter_book' AND author_book = '$filter_author' AND editorial_book = '$filter_editorial'";
    

        }else if(isset($filter_book)  && isset($filter_author)) {

            $query = "SELECT * FROM register_books WHERE title_book = '$filter_book' AND author_book = '$filter_author'";

        }
        else if(isset($filter_book)  && isset($filter_editorial) ){

            $query = "SELECT * FROM register_books WHERE title_book = '$filter_book' AND editorial_book = '$filter_editorial' ";

        }
        else if(isset($filter_author)  && isset($filter_editorial) ){

            $query = "SELECT * FROM register_books WHERE author_book = '$filter_author' AND editorial_book = '$filter_editorial' ";

        }
        else if(isset($filter_book)){

            $query = "SELECT * FROM register_books WHERE title_book = '$filter_book'";
            
        }  
        else if(isset($filter_author)){
            $query = "SELECT * FROM register_books WHERE author_book = '$filter_author'";

        } 
        else if(isset($filter_editorial)){
            $query = "SELECT * FROM register_books WHERE editorial_book = '$filter_editorial'";
        }
        
        $data = $this->report->filter($query);
        array_pop($data);

        if(empty($data)){
          return "
            <div class='alert alert-danger mt-3 ' role='alert'>
                No se ha encontrado ningun registro
            </div>";  
        }else{
            return $data;
        }
    }
}