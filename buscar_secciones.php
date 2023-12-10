<?php
require_once("modeloseccion.php");
$secc= new clase_secciones();
$registros=$secc->_consultartodo($_POST['valor']); 
echo "<table id='tabla' name='tabla' class='table table-bordered'>
        <thead class='bg-primary text-light text-center'>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>NOMBRE DE SECCIONES</th>
                <th>OBSERVACION</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>";
//        if($result->fetchColumn()>0)
//{
    $f=1;
    while ($fila = $registros->fetch())
    {
        echo "<tr>
                <td>".$f."</td>
                <td>".$fila['sec_id']."</td>
                <td>".$fila['sec_nombre']."</td>
                <td>".$fila['sec_observ']."</td>
            </tr>";
        $f++;
    }
//}
//else
//{
//    echo "<tr><td colspan='6' class='bg-danger text-light text-center'>No existen registros a mostrar</td></tr>";
//}
echo "</table>";
?>