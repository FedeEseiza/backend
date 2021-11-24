<?php
    include 'php/functions.php';
    $conexion = conexion();
    $data = $_POST;
    $id_producto = $data['id_producto'];
    $id_usuario = $data['id_usuario'];
    $precio = $data['precio'];
    $nombre = $data['nombre'];
    $imagen = $data['imagen'];
    $statement = $conexion->prepare('INSERT INTO carritos (id_usuario,nombre,precio,img,id_producto) VALUES (:id_usuario,:nombre,:precio,:img,:id_producto)');
    $statement -> execute(array(
        ':id_usuario' => $id_usuario,
        ':nombre' => $nombre,
        ':precio' => $precio,
        ':img' => $imagen,
        ':id_producto' => $id_producto
    ));
    return;
?>