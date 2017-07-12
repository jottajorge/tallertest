<?php

include_once ("src/abstraction.php");

/**
 *
 */
class ModelEmpresa extends DbAbstract {

    public $table = "empresa";
    public $fields = ['id'. 'nome', 'cnpj', 'usuario', 'ativo'];

}
