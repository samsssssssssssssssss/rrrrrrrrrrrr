<?php
class clase_secciones
{   public $vlsec_id;
    public $vlsec_nombre;
    public $vlsec_observ;
    public function __construct()
    {
        $this->vlsec_id="";
        $this->vlsec_nombre="";
        $this->vlsec_observ="";
    }
    public function _insertar($vlsec_nombre, $vlsec_observ){
        require_once("../../../conexion/conexion.php");
        //$dmlsentencia="insert into si_provincias(sec_nombre,sec_observacion) values ('vlsec_nombre ','vlsec_observacion')";
        $dmlsentencia="insert into snv_secciones(sec_nombre,sec_observ) values ('" . $vlsec_nombre . "','" . $vlsec_observ . "')";
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from snv_secciones";
        }
        else
        {
            $dmlsentencia="select * from snv_secciones where sec_nombre like '%s', %".$valor."%";
        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $nombre, $observacion)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>