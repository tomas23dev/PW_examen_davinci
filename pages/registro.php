<?php 

include_once("../components/header.php");

?>
<form action="#" method="get" class="login_form"> 
    

    <h1 class="h3 mb-3 fw-normal">Registro</h1> 
    <div class="form-floating"> 
        <label for="floatingInput">Nombre/s</label> 
        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre..." name="nombre"> 
    </div> 
    <div class="form-floating"> 
        <label for="floatingInput">Apellido/s</label> 
        <input type="text" class="form-control" id="floatingInput" placeholder="Apellido..." name="apellido"> 
    </div> 
    <div class="form-floating"> 
        <label for="floatingInput">Correo electronico</label> 
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo"> 
    </div> 
    <div class="form-floating"> 
        <label for="floatingPassword">Contraseña</label> 
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="clave"> 
    </div> 
    <div class="form-floating"> 
        <label for="floatingPassword">Confirmar contraseña</label> 
        <input type="password" class="form-control" id="floatingPassword" placeholder="Repetir password" name="clave"> 
    </div> 
    <button class="btn btn-primary w-100 py-2" type="submit">Registrarse</button> 

</form>

<?php 

include_once("../components/footer.php");

?>