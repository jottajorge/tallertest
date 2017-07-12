<?php

include "abstraction.php";

/**
 *
 */
class ModelProduto extends DbAbstract
{
    public $table    = "produto";
    public $fields   = ['id', 'nome', 'ativo'];
}
