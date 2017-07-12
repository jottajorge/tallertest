<?php
include_once("src/pedido/ModelPedido.php");

class RepositoryPedido {

    protected $pedido;

    public function __construct($method = "") {
        $this->pedido  = new ModelPedido();
    }

    public function create($params) {
        $return = $this->pedido->create($params);
        return $return;
    }
}
