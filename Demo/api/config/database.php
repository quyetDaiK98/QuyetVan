<?php
    class Database
    {
        private $conn;
        private $host="localhost";
        private $user="root";
        private $passWord="123456";
        private $dbName="test_app";

        public function GetConnection(){
            if(!$this->conn){
                $this->conn = mysqli_connect($this->host,$this->user,$this->passWord,$this->dbName);
                if (mysqli_connect_errno()) {
                    echo 'Failed: '. mysqli_connect_error();
                    die();
                }
                mysqli_set_charset($this->conn,"utf8");
            }
            return $this->conn;
        }
        public function CloseConnect(){
            if ($this->conn) {
                mysqli_close($this->conn);
            }
        }
    }
    
?>