<?php
include_once("../components/header.php");
?>
    <main>
        <h1>DETALLES DEL PRODUCTO</h1>
        <section>
            <figure>
                <figcaption>Ibuprofeno 400 mg</figcaption>
                <img src="../assets/img/productos/producto1.png" alt="actron ibuprofeno 400mg">
            </figure>
            <p>Calificacion</p>        
            <p>Marca</p>
            <p>Precio</p>
            <p>Descripcion</p>
            <p>Ranking</p>
            <p>Listado comentarios aprobados</p>
        </section>
        <section>
            <form action="#" method="get" class="login_form"> 
                <h1 class="h3 mb-3 fw-normal">Comentarios</h1> 
                <div class="form-floating"> 
                    <label for="floatingInput">Correo electronico</label> 
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo"> 
                </div> 

                <div>
                    <label for=""></label>
                    <textarea name="" id=""></textarea>
                </div>

                <div class="form-floating"> 
                    <label for="1">1</label> 
                    <input type="radio" name="valoracion" id="1">
                </div>
                <div class="form-floating"> 
                    <label for="2">2</label> 
                    <input type="radio" name="valoracion" id="2">
                </div>
                <div class="form-floating"> 
                    <label for="3">3</label> 
                    <input type="radio" name="valoracion" id="3">
                </div>
                <div class="form-floating"> 
                    <label for="4">4</label> 
                    <input type="radio" name="valoracion" id="4">
                </div>
                <div class="form-floating"> 
                    <label for="5">5</label> 
                    <input type="radio" name="valoracion" id="5">
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button> 
            </form>
        </section>



    </main>
<?php
include_once("../components/footer.php");
?>