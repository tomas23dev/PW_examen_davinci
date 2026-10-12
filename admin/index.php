<?php
include_once("../components/headerAdm.php");
?>
    <main>
        <h1>PANEL ADMINISTRADOR</h1>
        <p>Bienvenido: <span>
        <?php 
        
        if(isset($_GET['msn'])){
            $mensaje=$_GET["msn"];
            print"$mensaje";
        }
            
        ?> </span></p>
        <br>
        <section class="admin_panel">
            <div><a href="../admin/adm_productos.php">Ver productos</a></div>           
            <div><a href="../admin/usuarios.php">Ver usuarios</a></div>
            <div><a href="../admin/perfiles.php">Ver perfiles</a></div>
            <div><a href="../admin/adm_categorias.php">Ver categorias</a></div>
            <div><a href="../admin/marcas.php">Ver marcas</a></div>
            <div><a href="../admin/comentarios.php">Ver comentarios</a></div>
        </section>
    </main>
<?php
include_once("../components/footer.php");
?>