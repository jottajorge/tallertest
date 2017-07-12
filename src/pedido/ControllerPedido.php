<?php

include "src/pedido/RepositoryPedido.php";

class ControllerPedido
{
    public function __construct($method = "") {
        
        $this->repo = new RepositoryPedido();
        $this->$method();
    }

    public function cadastrar() {

        if($_POST){
            $post        = $_POST;
            $inserted_id = $this->repo->create($post);
        }

        include_once("src/view/cadastroPedido.php");
    }
}
