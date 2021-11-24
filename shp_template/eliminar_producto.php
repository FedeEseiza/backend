<?php 
    include 'php/functions.php';
    $conexion = conexion();
    $data = $_POST;
    echo $data;
    $id_producto = $data['id_producto'];
    $statement = $conexion->prepare('DELETE FROM carritos WHERE id_producto = :id');
    $statement -> execute( array(
        ':id' => $id_producto
    ));
    return
?>