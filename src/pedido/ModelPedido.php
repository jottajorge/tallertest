<?php

include_once("src/abstraction.php");

/**
 *
 */
class ModelPedido extends DbAbstract {
    public $table  = "pedido";
    public $fields = ['id', 'empresa', 'ativo'];
}
