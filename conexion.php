<?php
    class Cconection{
    
        function conectar(){
            $user = "root";
            $pass = "urlof_desty123";
            $host = "localhost";
            $db = "SS";
            try{
                $conn = new PDO ("mysql:host=$host;dbname=$db",$user,$pass);
                echo "se conecto exitosamente";
            }catch(PDOException $exp){
                echo ("no se pudo conectar a la base de datos: $exp");
            }
            return $conn;
        }
    }
?>