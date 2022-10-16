<?php
    class Cconection{
        
        private $user;
        private $host;
        private $pass;
        private $db;

        public function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "urlof_desty123";
            $this->db = "SS";
        }

        function conectar(){
            try{
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db;
                $options = [
                    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  => false,
                ];
                $pdo = new PDO ($connection, $this->user,$this->pass, $options);
                return $pdo;
            }catch(PDOException $exp){
                echo ("no se pudo conectar a la base de datos: ".$exp->getMessage());
            }
        }


    }
?>