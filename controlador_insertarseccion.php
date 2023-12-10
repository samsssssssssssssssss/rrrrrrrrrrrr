
<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
    require_once('modeloseccion.php');
    $obj = new clase_secciones();
    $result=$obj->_insertar(
    $_POST['txt_nombre'],
    $_POST['txt_observacion']);
    
    if($result)
    {
        echo '<script>jQuery(function(){swal({
            title:"Guardar Secciones", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
        }, function(){location.href="../crud_secciones.html";});});</script>';
    }
    else
    {
        echo '<script>jQuery(function(){swal({
            title:"Guardar Persona", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
        }, function(){location.href="../crud_seccciones.html";});});</script>';
    }

     //require_once('vistasinestilo.html');
    ?>
