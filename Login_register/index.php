<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro - Oscar Espejo</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <!--ESTE ES EL CONTENEDOR PRINCIPAL-->
            <div class="caja__trasera">
                <!--ESTE CONTENEDOR ES EL CONTENEDOR PEQUEÑO QUE CONTIENE EL FORMULARIO-->
                <div class="cajatrasera_login">
                    <!--CONTIENE EL FORMULARIO DEL LOGIN-->
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para acceder a tu cuenta</p>
                    <button id="BTN-INICIAR SESION">Iniciar sesión</button>
                    <!--BOTON PARA INICIAR SESIÓN-->
                </div>
                <div class="cajatrasera_register">
                    <!--CAJA PARA REGISTRAR UN NUEVO USUAURIO-->
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="BTN-RESGISTRARSE">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__loginregister">
                <!--formulario login y registro-->
                <form action="" class="formulario__login">
                    <!--formulario de login-->
                    <h2>INICIAR SESIÓN</h2>
                    <input type="text" placeholder="Correo electrónico" />
                    <input type="pasword" placeholder="Ingresa tu contraseña" />
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <!--formulario de registro-->
                    <h2>REGISTRARSE</h2>
                    <input type="text" placeholder="Nombre" name="Nombre"/>
                    <input type="text" placeholder="Apellido" name="Apellido" />
                    <p>Seleccione un tipo de documento: </p>
                    <select name="tipo_documento" >
                        <option selected value="0" text-align="left"> Elige una opción </option>
                        <option value="1">Cedula</option>
                        <option value="2">Tarjeta de identidad</option>
                        <option value="3">Cedula extranjera</option>
                    </select>
                    <input type="number" placeholder="Ingresa tu número de cedula" name="num_cedula" />
                    <p>Ingresa tu fecha de nacimiento </p>
                    <input type="date" placeholder="Ingresa tu fecha de naciemiento" name="date"/>
                    <input type="text" placeholder="Ciudad de nacimiento" name="ciudadN"/>
                    <input type="number" placeholder="Ingresa tu número de telefono"name="Telefono" />
                    <input type="text" placeholder="Correo Electrónico" name="Correo"/>
                    <input type="text" placeholder="Usuario" name="Usuario" />
                    <input type="password" placeholder="Ingresa una contraseña" name="Contrasena"/>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="assets/js/script.js"></script>

</html>