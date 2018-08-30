<?php 

        $SERVERNAME = 'localhost';
        $USERNAME = 'root';
        $PASSWORD = '';
        $DBNAME = 'powertech';
        
try {
             
            $conn = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);
             echo "se conecto a la base de datos";
         //$conexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
    }catch (PDOException $e) {
         echo "<p>No se puede conectar a la base de datos !!</p>";
         exit;
         }
         return $conn;
      
?>