<?php 
require_once("../Models/binnacle_model.php");
class Binnacle_Controller{

    private $binnacle;

    public function __construct(){
        $this->binnacle = new binnacle_model();
    }

    public function create($data){
        $this->binnacle->create($data);
    }
    public function read(){
        return $this->binnacle->read();
    }
}