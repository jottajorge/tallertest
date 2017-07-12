<?php
include_once("src/empresa/ModelEmpresa.php");

class RepositoryEmpresa {

    protected $empresa;

    public function __construct($method = "") {
        $this->empresa  = new ModelEmpresa();
    }

    public function create($params) {
        
        $return = $this->empresa->create($params);

        if($return) {
            return $return;
        } else {
            //retorna erro
            throw new Exception("Erro ao cadastrar", 1);
        }
    }
}
