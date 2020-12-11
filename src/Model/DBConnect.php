<?php
namespace APP\Model;
use PDO;
class DBConnect
{
        public $db;
        public $user;
        public $pass;

        public function __construct(){
            $this->db = "mysql:host=localhost;dbname=products";
            $this->user = 'root';
            $this->pass = '1@QuynhLe1';
        }

        public function connect()
        {
            try{
                return new PDO($this->db,$this->user,$this->pass);
            }
            catch (\PDOException $e){
                echo $e->getMessage();
                exit();
            }

        }
}