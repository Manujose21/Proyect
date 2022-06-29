<?php 

require_once("../Models/user_model.php");

class User_Controller{

    private $user;

    public function __construct(){
        $this->user = new user_model();
    }

    public function create($data){
        $this->user->create($data);
        // header('Location: table_book.php');
    }
    public function read(){
        return $this->user->read();
    }
    public function update(){
        return $this->user->getConn();
        // header('Location: table_book.php');
    }
    public function delete($id){
        $id_int = intval($id);
        $this->user->delete($id_int);
        // header('Location: table_book.php');
    }
    public function valid($user, $pass){

        $result = $this->user->validateUser($user, $pass);
        if (empty($result)) {
            # code...
            return print "<div class='alert alert-danger mt-3 ' role='alert'>
                Las credenciales ingresadas no existen
            </div>";
        }else{
            // session_start();
            // if(isset($_SESSION['user'])){
                
            //     $_SESSION['user'] = $result["user"];
            // }
            // si sabes como bien como crear la variable de sesion
            // me ayudas con eso        
            
            return header('Location: main.php');
        }
    }
}