<?php 

include_once("../components/header.php");

?>
<main class="main-form">
    <h1>INICIO DE SESION</h1> 
    <section>
        <form action="#" method="get" class="login-form">  
            <div class="form-items"> 
                <label for="correo">Email</label> 
                <input type="email" id="correo" placeholder="name@example.com" name="correo"> 
            </div> 
            <div class="form-items""> 
                <label for="password">Clave</label> 
                <input type="password" id="password" name="password"> 
            </div> 
            <button class="boton_envio_form" type="submit">Iniciar Sesion</button> 
            <div class="enlace_registro">
                <a href="../pages/registro.php" class="">Registrate Aqui para crear una cuenta nueva</a>
            </div>
        </form>
    </section>
</main>


<?php 

include_once("../components/footer.php");

?>