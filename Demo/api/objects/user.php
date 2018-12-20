<?php
    class User
    {
        private $conn;
        private $tableName="user";
        private $userName;
        private $passWord;

        public function __construct($db){
            $this->conn=$db;
        }
        public function getUserName(){
            return $this->userName;
        }
        public function setUserName($userName){
            $this->userName=$userName;
        }
        public function setPassWord($passWord){
            $this->passWord=$passWord;
        }
        public function getPassWord(){
            return $this->passWord;
        }
        function read(){
 
            // select all query
            $query = "SELECT * FROM user";
         
            // prepare query statement
            return mysqli_query($this->conn,$query);
        }
    }
    
?>