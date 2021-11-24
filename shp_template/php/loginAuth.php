<?php
    include 'functions.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conexion=conexion();
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email');
		$statement ->execute(array( 
		':email' => $email));
        $user_data = $statement -> fetchAll();
        foreach ($user_data as $row){
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $email = $row['email'];
            $password_hash = $row['password'];
        }
        if ($user_data != false){
           if (password_verify($password, $password_hash)){
                session_start();
                $_SESSION['user'] = $nombre;
                header('Location: '. '../index.php');
           }else {
               $error = 'Contraseña invalida';
               
           }            
        }else{
            $error = 'Usuario invalido';
        }	
    }
    include '../login.php';
?>