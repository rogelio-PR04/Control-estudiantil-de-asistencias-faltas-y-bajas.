<?php
        //Empezar la sesión
        session_start();
        //Incluyendo la conexión a la base de datos
        require_once 'creacion_bdd.php';
       
        if(ISSET($_POST['Proyecto_AST'])){
                //Estableciendo las variables
                $Correo = $_POST['Correo'];
                $Contrasenia = $_POST['Contrasenia'];
               
                // Consulta de selección (Select Query) para contar las filas que tengan el mismo valor de la contraseña y correo dados. Es para revisar si el acceso es válido o no.
                $query = "SELECT COUNT(*) as count FROM `Data` WHERE `Correo` = :Correo AND `Contrasenia` = :Contrasenia";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':Correo', $Correo);
                $stmt->bindParam(':Contrasenia', $Contrasenia);
                $stmt->execute();
                $row = $stmt->fetch();
               
                $count = $row['count'];
                if($count > 0){
                        header('location:home.php');
                }else{
                        $_SESSION['error'] = "Invalid username or password";
                        header('location:login.php');
                }
        }
?>