<?php 

include_once 'modelos.php';

class Simulacion{

    private $ModelGlobal;
    private $tabla_VwFlotaAutosAF;

    public function __construct() {

        $this->ModelGlobal = new ModelGlobal();
        $this->tabla_VwFlotaAutosAF = "VwFlotaAutosAF_Customer";
        $this->tabla_VwFlotaAutosAF_vendidas = "VwFlotaAutosAFVendidos";

    }

    public function TodasUnidades(){
        return $this->ModelGlobal->obtenerTodos($this->tabla_VwFlotaAutosAF);
    }

    public function TodasUnidadesVendidas(){
        return $this->ModelGlobal->obtenerTodos($this->tabla_VwFlotaAutosAF_vendidas);
    }

    public function DatosUnidadId($id){
        return $this->ModelGlobal->datosUnidadId($this->tabla_VwFlotaAutosAF, $id);
    }

    public function DatosUnidadIdVendida($id){
        return $this->ModelGlobal->datosUnidadId($this->tabla_VwFlotaAutosAF_vendidas, $id);
    }

}