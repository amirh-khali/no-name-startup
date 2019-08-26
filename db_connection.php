<?php


// namespace prevision;

class Database
{

    private $host = "localhost";
	private $user = "pmauser";
	private $password = "sher124816";
	private $database = "computer_db";
	public $conn;

    // private $port;

    public function __construct () {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        $this->conn = $conn;
    }

    public function close(){
        $this->mysql_conn->close();
    }


}

?>
