<?php

include_once ("src/abstraction.php");

/**
 *
 */
class ModelUsuario extends DbAbstract {

    public $table = "usuario";
    public $fields = ['id'. 'email', 'senha', 'ativo'];

}
