<?php
require_once "include.php";
inc_Class("controllers");

class DBConnection
{
    private $servername = "127.0.0.1:3306";
    private $username = "root";
    private $database = "leaderboard";
    private $password = "";
    private $conn;
    private $result;

    // Create connection
    public function __construct()//$newSName, $newUName, $newDB, $newPW)
    {
        $this->conn = new mysqli($this->servername, $this->username,$this->password, $this->database);

        if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
        }
    }

    protected function init()
    {
        $this->conn = new mysqli($this->servername, $this->username,$this->password, $this->database);


    }

    public function getConnection()
    {
        return $this->conn;
    }


    public function getResult($sql) 
    {
        if (mysqli_more_results($this->conn)) {
            mysqli_free_result($this->result);
            mysqli_next_result($this->conn);
        }
        $this->result=$this->conn->query ($sql);

        return $this->result;
    }

}

?>


