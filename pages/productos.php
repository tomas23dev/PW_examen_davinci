<?php
include_once("../components/header.php");
?>
    <main>
        <h1>DETALLES DEL PRODUCTO</h1>
        <section>
            <figure>
                <h2>Ibuprofeno 400 mg</h2>
                <img src="../assets/img/productos/producto1.png" alt="actron ibuprofeno 400mg">
            </figure>
            <p>Calificacion</p>        
            <p>Marca: BAYER</p>
            <p>Precio: $ 12.000</p>
            <p>Descripcion: NULL</p>
            <p>Ranking: NULL</p>
            <p>Listado comentarios aprobados: NULL</p>


    <div class="main_form">
        <h1 class="h3 mb-3 fw-normal">Comentarios</h1>   
        <section>
            <form action="#" method="get" class="login_form"> 
                
                <div class="form-items"> 
                    <label for="correo">Correo electronico</label> 
                    <input type="email" id="correo" placeholder="name@example.com" name="correo"> 
                </div> 

                <div>
                    <p>Comentario:</p>
                    <label for="comentario:"></label>
                    <textarea name="comentario" id="comentario"></textarea>
                </div>

                <div class="form-items"> 
                    <p>Valoracion:</p>
                    <label for="1">1</label> 
                    <input type="radio" name="valoracion" id="1">
                </div>
                <div class="form-items"> 
                    <label for="2">2</label> 
                    <input type="radio" name="valoracion" id="2">
                </div>
                <div class="form-items"> 
                    <label for="3">3</label> 
                    <input type="radio" name="valoracion" id="3">
                </div>
                <div class="form-items"> 
                    <label for="4">4</label> 
                    <input type="radio" name="valoracion" id="4">
                </div>
                <div class="form-items"> 
                    <label for="5">5</label> 
                    <input type="radio" name="valoracion" id="5">
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button> 
            </form>
        </section>

    </div>   

    </main>
<?php
include_once("../components/footer.php");
?>