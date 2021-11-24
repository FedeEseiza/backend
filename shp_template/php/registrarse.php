<?php
    include 'functions.php';
//	$usuario=$_SESSION['usuario'];
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if ($password == $password2){
            $password_hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $conexion=conexion();
            $statement = $conexion->prepare('INSERT INTO usuarios (id,nombre,apellido,email,password) VALUES (NULL,:nombre,:apellido,:email,:password)');
		    $statement ->execute(array(
			':nombre' => $nombre, 
			':apellido' => $apellido, 
		    ':email' => $email,
			':password' => $password_hash));
        }else{
            echo 'Contraseña invalida';
        }	
    }
    include '../registrarseView.php';
?>