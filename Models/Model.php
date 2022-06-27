<?php
abstract class Model {

    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "";
    private static $db_charset = "utf8";
    private static $db_name = "loan_system";
    private $conn;
    protected $rows = [];

    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();

    private function db_open(){
        $this->conn = new mysqli(
            self::$db_host,
            self::$db_user,
            self::$db_pass,
            self::$db_name
        );
        $this->conn->set_charset(self::$db_charset);
    }

    private function db_close(){
        $this->conn->close();
    }

    // INSERT UPDATE DELETE
    protected function set_query($query){
        $this->db_open();
        $this->conn->query($query);
        $this->db_close();
    }

    protected function get_conn(){
        $this->db_open();
        return $this->conn;
        //$this->conn->query($query);
        $this->db_close();
    }

    // SELECT
    protected function get_query($query){
        $this->db_open();
        $result = $this->conn->query($query);
        while($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->db_close();
        return $this->rows;

    }

}
