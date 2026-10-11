<?php 

include_once("../components/header.php");

?>
<form action="#" method="get" class="login_form"> 
    

    <h1 class="h3 mb-3 fw-normal">Inicio de Sesion</h1> 
    <div class="form-floating"> 
        <label for="floatingInput">Correo electronico</label> 
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo"> 
    </div> 
    <div class="form-floating"> 
        <label for="floatingPassword">Clave</label> 
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="clave"> 
    </div> 
    <button class="btn btn-primary w-100 py-2" type="submit">Iniciar</button> 
    <div class="div_enlace_registro">
        <a href="../pages/registro.php" class="enlace_registro">Registrate para crear una cuenta nueva</a>
    </div>
</form>

<?php 

include_once("../components/footer.php");

?>