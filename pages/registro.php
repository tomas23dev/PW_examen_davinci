<?php 

include_once("../components/header.php");

?>
<main class="main-form">

    <h1>REGISTRO DE NUEVO USUARIO</h1> 
    <section>
        <form action="#" method="get" class="login-form"> 
            <div class="form-items"> 
                <label for="nombre">Nombre/s</label> 
                <input type="text" id="nombre" placeholder="Nombre..." name="nombre"> 
            </div> 
            <div class="form-items"> 
                <label for="apellido">Apellido/s</label> 
                <input type="text" class="form-control" id="apellido" placeholder="Apellido..." name="apellido"> 
            </div> 
            <div class="form-items"> 
                <label for="correo">Correo electronico</label> 
                <input type="email" id="correo" placeholder="name@example.com" name="correo"> 
            </div> 
            <div class="form-items"> 
                <label for="clave">Contraseña</label> 
                <input type="password" id="clave" placeholder="Password" name="clave"> 
            </div> 
            <div class="form-items"> 
                <label for="claveRep">Confirmar contraseña</label> 
                <input type="password" id="claveRep" placeholder="Repetir password" name="claveRep"> 
            </div> 
            <button class="boton_envio_form" type="submit">Registrarse</button> 

        </form>

</main>


<?php 

include_once("../components/footer.php");

?>