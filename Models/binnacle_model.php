<?php
require_once("Model.php");

class binnacle_model extends Model{

    private $id_binnacle;
    private $user;
    private $date_activity;

    public function create($data = array()){
        foreach( $data as $key => $value ){
            $$key = $value;
        }

        $query = "INSERT INTO binnacle_activity(user) 
        VALUES ('$user')";

        $this->set_query($query);
    }

    public function read( $id="" ){

        if($id != ""){
            $query = "SELECT * FROM binnacle_activity WHERE id_binnacle = $id";
        }else{
            $query = "SELECT * FROM binnacle_activity";
        }

        $results = $this->get_query($query);

        array_pop($results);

        return $results;
    }

    public function update($data = array()){
        // foreach( $data as $key => $value ){
        //     $$key = $value;
        // }
        // $query = "UPDATE register_lends SET 
        // date_lend = '$date_lend',
        // limit_date = '$limit_date',
        // title_book = '$title_book',
        // name_student = '$name_student',
        // ci_student = '$ci_student',
        // ";
    }


    public function delete($id = ""){
        //$query = "DELETE FROM register_lends WHERE id_lend = $id";
        //$this->set_query($query);
    }
}