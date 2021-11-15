<?php

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");
 
if($conexion){
    echo "Usuario creado con éxito";
  
}else{
    echo"no se puedo conectar a la base de datos";
}

