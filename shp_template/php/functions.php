<?php

function obtenerProductos(){
    $productos = [
        ['nombre' => 'Papas Fritas', 'precio' => 100, 'imagen' => 'img/papas-fritas.png'],
        ['nombre' => 'Ensalada', 'precio' => 300, 'imagen' => 'img/ensalada.png'],
        ['nombre' => 'Pizza', 'precio' => 500, 'imagen' => 'img/pizza.png'],
        ['nombre' => 'Sandwich', 'precio' => 300, 'imagen' => 'img/sandwich.png'],
        ['nombre' => 'Hamburguesa', 'precio' => 350, 'imagen' => 'img/hamburguesa.png'],
        ['nombre' => 'Galletita', 'precio' => 200, 'imagen' => 'img/galletitas.png'],
        ['nombre' => 'Panchos', 'precio' => 200, 'imagen' => 'img/pancho.png'],
        ['nombre' => 'Dona', 'precio' => 100, 'imagen' => 'img/dona.png'],
    ];
    return $productos;
}

function conexion(){
	try {
		$conexion=new PDO('mysql:host=localhost;dbname=backend_curso', 'root','root');
		return $conexion;
	}catch (PDOExeption $e){
		return false;
	}
}
function obtenerUsuarios(){
    $connection = conexion();
    $query = $connection->query("SELECT * FROM usuarios");
    $row = $query->fetch_all();
    mysqli_close($connection);  
    return $row;
}

function obtenerProductosQuery(){
    $conexion=conexion();
    $statement = $conexion->prepare('SELECT * FROM productos');
    $statement ->execute();
    $row = $statement -> fetchAll();
    return $row;
}

?>