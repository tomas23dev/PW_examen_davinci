<?php
include_once("../components/header.php");
?>


<main class="main-form">
    <h1>FORMULARIO DE CONTACTO</h1>
    <section>
        <form action="../admin/comentarios.php" method="get" class="login-form"> 
            
            <div class="form-items"> 
                <label for="nombre">Nombre/s</label> 
                <input type="text" id="nombre" placeholder="Nombre..." name="nombre" required> 
            </div> 
            <div class="form-items"> 
                <label for="apellido">Apellido/s</label> 
                <input type="text" id="apellido" placeholder="Apellido..." name="apellido" required> 
            </div> 
            <div class="form-items"> 
                <label for="correo">Correo electronico</label> 
                <input type="email" id="correo" placeholder="name@example.com" name="correo" required> 
            </div> 
            <div class="form-items"> 
                <label for="telefono">Telefono</label> 
                <input type="tel" id="telefono" name="telefono" required> 
            </div> 
            <div class="form-items"> 
                <p>Area</p>
                <select name="area" id="area">
                    <option value="medicamentos">Area de medicamentos</option>
                    <option value="perfumeria">Perfumeria, cuidado personal y dermocosmetica</option>
                    <option value="maternidad_infantil">Maternidad e infantil</option>
                    <option value="alimentos">Alimentos</option>
                </select required>
            </div> 
            <div class="form-items"> 
                <label for="comentario">Comentario</label> 
                <textarea name="comentario" id="comentario" required></textarea>
            </div> 
            <button class="boton_envio_form" type="submit">Enviar Mensaje</button> 
    
        </form>
    </section>
</main>
<?php 

include_once("../components/footer.php");

?>
