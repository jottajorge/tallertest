<?php

include "src/usuario/RepositoryUsuario.php";

class ControllerUsuario
{
    public function __construct($method = "") {

        $this->repo = new RepositoryUsuario();
        $this->$method();
    }

    public function dashboard() {
        $data = $this->repo->dashboard();
        include_once("src/view/dashboard.php");
    }

    public function cadastrar() {

        if($_POST) {

            $post        = $_POST;

            if($post["senha"] == $post["senha_repetir"]) {

                unset($post["senha_repetir"]);

                try {
                    $this->repo->create($post);
                    $success = "Cadastrado com sucesso!";
                } catch (Exception $e) {
                    $fail = $e->getMessage();
                }

            } else {
                $fail = "Senhas não conferem";
            }
        }

        include_once("src/view/cadastroUsuario.php");
    }

    public function editar(){

        $email = $_SESSION["user"]["email"];

        if($_POST) {

            $post = $_POST;
            $id   = $_SESSION["user"]["id"];

            if($post["senha"] == $post["senha_repetir"]) {

                unset($post["senha_repetir"]);

                try {
                    $this->repo->edit($id, $post);
                    $success = "Alterado com sucesso!";
                } catch (Exception $e) {
                    $fail = $e->getMessage();
                }

            } else {
                $fail = "Senhas não conferem";
            }
        }

        include_once("src/view/editarUsuario.php");
    }

    public function login() {

        if($_POST) {

            $post = $_POST;

            try {
                $this->repo->login($post);
            } catch (Exception $e) {
                $fail = $e->getMessage();
            }
        }

        include_once("src/view/login.php");
    }

    public function logout() {

        $this->repo->logout();

    }
 }
