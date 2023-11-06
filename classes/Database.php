<?php

class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password = ""; //MAMP USERS password = root
    private $db_name = "the_company_11_am";
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error)
        {
            die('Unable to connect to the database' . $this->conn->connect_error);
        }
    }
}

?>