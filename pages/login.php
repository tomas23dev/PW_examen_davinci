<?php 

include_once("../components/header.php");

?>
<main class="main-form">
    <h1>INICIO DE SESION</h1> 
    <?php

    if(isset($_GET["msn"])){
        $mensaje=$_GET["msn"];
        if($mensaje=="no"){
            print"<p>INGRESO INVALIDO. PRUEBE NUEVAMENTE!</p>";
        }
    }

    ?>
    <section>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post" class="login-form">  
            <div class="form-items"> 
                <label for="correo">Email</label> 
                <input type="email" id="correo" placeholder="name@example.com" name="correo" required> 
            </div> 
            <div class="form-items"> 
                <label for="password">Clave</label> 
                <input type="password" id="password" name="password" required> 
            </div> 
            <button class="boton_envio_form" type="submit">Iniciar Sesion</button> 
            <div class="enlace_registro">
                <a href="../pages/registro.php">Registrate Aqui para crear una cuenta nueva</a>
            </div>
        </form>
    </section>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $correo=htmlspecialchars($_REQUEST["correo"]);
            $clave=htmlspecialchars($_REQUEST["password"]);
            $ingreso=false;

            if(($correo=="admin@gmail.com") and($clave=="12345")){
                header("Location:../admin/index.php?msn=$correo");
            }

            else if(($correo=="user@gmail.com") and($clave=="12")){
                header("Location:../pages/home.php?msn=$correo");
            }
            else{
                header("Location:../pages/login.php?msn=no");
            }
        }
    ?>


</main>


<?php 

include_once("../components/footer.php");

?>