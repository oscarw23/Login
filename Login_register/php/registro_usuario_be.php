<?php
include 'conexion_be.php';
   $Nombre = $_POST["Nombre"];
   $Apellido = $_POST["Apellido"];
   $tipo_documento = $_POST["tipo_documento"];
   $num_cedula = $_POST["num_cedula"];
   $date = $_POST["date"];
   $Telefono = $_POST["Telefono"];
   $Correo = $_POST["Correo"];
   $Usuario = $_POST["Usuario"];
   $Contrasena = $_POST["Contrasena"];
   $query = "insert into usuarios (Nombre, Apellido, tipo_cedula, cedula, fecha_nacimiento, ciudad_nacimiento, telefono, correo, usuario, contraseña) 
   values('$Nombre','$Apellido','$tipo_documento','$num_cedula', '$date','$Telefono','$Correo','$Usuario','$Contrasena')";
   $ejecutar=mysqli_query($conexion, $query);
   
   echo '<script>
   alert("usuario creado éxito");
   window.location = "../index.php"
   </script>'
?>