<?php
include_once("../components/headerAdm.php");
?>
    <main>
        <h1>PANEL ADMINISTRADOR - PRODUCTOS</h1>
        
        <table>
            <caption>Inventario de Productos</caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Marca de Destacado</th>
                    <th>Modificar</th>
                    <th>Activar</th>
                    <th>Inactivar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pasta dental</td>
                    <td>Colgate</td>
                    <td>Black and white</td>
                    <td>Salud</td>
                    <td>10000</td>
                    <td>Null</td>
                    <td>Null</td>
                    <td>BOTON</td>
                    <td>BOTON</td>
                    <td>BOTON</td>
                </tr>
            </tbody>
        </table>
        
    </main>
<?php
include_once("../components/footer.php");
?>