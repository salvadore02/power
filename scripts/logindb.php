<?php
    $SERVERNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DBNAME = 'powertech';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $login = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        
        //conectar con la base de datos
        $conn = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);
        
        if($conn->connect_error){
            die("Fallo de conexion a la BD..." .$conn->connect_error);
        }else{
            $sql = "SELECT nombre, email, tipo_usuario FROM usuarios WHERE email = '$login' AND pass = '$password'";
            
            $result = $conn->query($sql);
            
            if($result->num_rows > 0){
                session_start();
                
                while($row = $result->fetch_assoc()){
                    $_SESSION["nombre"] = $row["nombre"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["tipo_usuario"] = $row["tipo_usuario"];
                }
            }else{
                header('location: ../usuarios/errorSesion.php');
            }
            
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    if($_SESSION["tipo_usuario"]=="A"){
        header('location: ../usuarios/usuarioA.php');
    }
    if($_SESSION["tipo_usuario"]=="B"){
        header('location: ../usuarios/usuarioB.php');
    }

    //echo $_SESSION["nombre"].", Has hecho login!";
    
?>
