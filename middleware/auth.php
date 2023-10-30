<?php
    require("database\connection.php");

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Comprueba si el usuario está logueado
    if(!isset($_SESSION["rut"])){
        
        header("Location: index.php?p=auth/login");
    }else{
        
        // Obtener el nombre de usuario de la sesión
        $rut = $_SESSION["rut"];
        print_r($_SESSION);

        $sql = "SELECT * FROM users WHERE rut = '$rut'";

        $result = mysqli_query($connection, $sql);

        // Verifica si el usuario existe
        if (mysqli_num_rows($result) == 0) {
            session_destroy();
            // User does not exist, redirect to login page
            header("Location: index.php?p=auth/login");
        }
    }
?>
