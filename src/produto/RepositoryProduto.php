<?php
include_once("src/produto/ModelProduto.php");
include_once("src/traits/TraitCollection.php");

class RepositoryProduto {

    protected $produto;

//    public function __construct(ModelProduto $produto){
    public function __construct($method = ""){
        $this->produto  = new ModelProduto();
        $this->$method();
    }

    public function index(){
        print "<pre>";
        var_dump((object)$this->produto->getAll());

        print "<br><br>";
        var_dump($this->produto->getAll());
    }
}
