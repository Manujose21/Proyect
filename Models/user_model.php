<?php
require_once("Model.php");
class user_model extends Model
{

    private $id_user;
    private $email;
    private $user;
    private $pass;

    public function create($data = array())
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        $query = "INSERT INTO users(user, email, pass) 
        VALUES ('$user', '$email', MD5('$pass'))";

        $this->set_query($query);
    }

    public function read($id = "")
    {

        if ($id != "") {
            $query = "SELECT * FROM users WHERE id_lend = $id";
        } else {
            $query = "SELECT * FROM users";
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
        $query = "UPDATE users SET 
            'user' = '$user',
            'email' = '$email',
            'pass' = MD5('$pass')
        ";
    }
    public function validateUser($user, $pass)
    {
        $query = "SELECT * FROM users WHERE user = '$user' AND pass = MD5('$pass')";
        $result = $this->get_query($query);
        array_pop($result);
        return $result;
    }

    public function getConn()
    {
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
        $id_user = intval($id);
        $query = "DELETE FROM users WHERE id_user = $id_user";
        $this->set_query($query);
    }
}