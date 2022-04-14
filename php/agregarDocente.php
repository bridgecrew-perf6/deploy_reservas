<?php 


  if($_POST){
     //echo json_encode($_POST);
     $servidor = "mysql-andre.alwaysdata.net";
     $usuario="andre_root";
     $contrasena="adivinala";
     $BD="andre_base_datos";
     $conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);

     $sql = "insert into usuarios (codigosis, nombre, apellido, ci, facultad, departamento, celular, telefono, correo, contrasena)". 
     "values('"
     .$_POST["codigosis"]."','"
     .$_POST["nombre"]."','"
     .$_POST["apellido"]."','"
     .$_POST["ci"]."','"
     .$_POST["facultad"]."','"
     .$_POST["departamento"]."','"
     .$_POST["celular"]."','"
     .$_POST["telefono"]."','"
     .$_POST["correo"]."','"
     ."N/A"."')";
     
     $result = mysqli_query($conexion,$sql);
     if($result){
      echo "1";
     }else{
      echo "0";
     }

     mysqli_close($conexion);

  }



?>