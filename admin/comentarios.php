<?php
include_once("../components/headerAdm.php");
?>
    <main>
        <h1>PANEL ADMINISTRADOR - COMENTARIOS</h1>
        
        <table>
            <caption>Tabla de Comentarios</caption>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Producto</th>
                    <th>Comentario</th>
                    <th>Fecha</th>
                    <th>Ranking</th>
                    <th>Activo/Inactivo</th>
                    <th>Aprobar/Desaprobar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tomas</td>
                    <td>Cepillo dental</td>
                    <td>Me gusto, pero muy caro!</td>
                    <td>11/10/2026</td>
                    <td>1</td>
                    <td>Activo</td>
                    <td>Aprobado</td>
                </tr>
            </tbody>
        </table>
        
    </main>
<?php
include_once("../components/footer.php");
?>