<?php
include_once("../components/header.php");
?>


<main>
    <h1>FORMULARIO DE CONTACTO</h1>
    
    <form action="#" method="get" class="login_form"> 
        

        
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
            <label for="floatingInput">Telefono</label> 
            <input type="tel" class="form-control" id="floatingInput" placeholder="" name="telefono"> 
        </div> 
        <div class="form-floating"> 
            <p>A quien va dirigido?</p>
            <select name="" id="">
                <option value="medicamentos">Area de medicamentos</option>
                <option value="perfumeria">Perfumeria, cuidado personal y dermocosmetica</option>
                <option value="maternidad_infantil">Maternidad e infantil</option>
                <option value="perfumeria">Perfumeria, cuidado personal y dermocosmetica</option>
            </select>
        </div> 
        <div class="form-floating"> 
            <label for="comentario">Comentario</label> 
            <textarea name="comentario" id="comentario"></textarea>
        </div> 
        <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button> 

    </form>
</main>
<?php 

include_once("../components/footer.php");

?>
