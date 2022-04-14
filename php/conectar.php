<?php
function conectar(){
    $servidor = "mysql-giusseppe.alwaysdata.net";
    $usuario="giusseppe";
    $contrasena="tonio2203";
    $BD="giusseppe_reservas";
    try{
        $conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);
        return $conexion;
    }catch(Exception $error){
        echo"no se pudo conectar a la base de datos";
    }
    
    
}
?>