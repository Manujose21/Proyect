<?php 

require_once("../Models/lend_model.php");

class Lend_Controller{

    private $lend;

    public function __construct(){
        $this->lend = new lend_model();
    }

    public function create($data){
        $this->lend->create($data);
        header('Location: table_lend.php');
    }
    public function read(){
        return $this->lend->read();
    }
    public function update(){
        return $this->lend->getConn();
    }
    public function delete($id){
        $id_int = intval($id);
        $this->lend->delete($id_int);
        header('Location: table_lend.php');
    }
}