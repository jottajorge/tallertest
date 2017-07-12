<?php

include "src/empresa/RepositoryEmpresa.php";

class ControllerEmpresa
{
    public function __construct($method = "") {

        $this->repo = new RepositoryEmpresa();
        $this->$method();
    }

    public function cadastrar() {

        if($_POST){

            $post = $_POST;

            try {
                $this->repo->create($post);
                $success = "Cadastrado com sucesso!";
            } catch (Exception $e) {
                $fail = $e->getMessage();
            }
        }

        include_once("src/view/cadastroEmpresa.php");
    }
 }
