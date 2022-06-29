<?php
require_once("Model.php");

class report_model extends Model{

   

    public function create($data = array()){
       
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

    public function filter($query){
        
       return  $this->get_query($query);
    }

    public function update($data = array()){

        
       
    }

    public function delete($id = ""){
       
    }
}