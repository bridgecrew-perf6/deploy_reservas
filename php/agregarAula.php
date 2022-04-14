<?php 
  require __DIR__ . "conectar.php";
  echo "toy conectao ";
  $conexion= conectar();
  
  if($_POST){
     
     $sql = "insert into Aula (facultad, nombre, capacidad, detalles, proyector)".
     "values('"
     .$_POST["facultad"]."','"
     .$_POST["nombre"]."','"
     .$_POST["capacidad"]."','"
     .$_POST["detalles"]."','"
     .$_POST["proyector"]."')";

     $result = mysqli_query($conexion,$sql);
    
     mysqli_close($conexion);


  }



?>