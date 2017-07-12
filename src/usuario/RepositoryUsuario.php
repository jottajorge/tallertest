<?php

include "ModelUsuario.php";
include "src/empresa/ModelEmpresa.php";
include "src/pedido/ModelPedido.php";

class RepositoryUsuario
{
    protected $usuario;
    protected $empresa;
    protected $pedido;

    public function __construct($method = "") {

        $this->usuario = new ModelUsuario();
        $this->empresa = new ModelEmpresa();
        $this->pedido  = new ModelPedido();
    }

    public function dashboard() {

        $return   = [];
        $empresas = $this->empresa->getAll();

        if(!empty($empresas)) {
            foreach ($empresas as $row) {

                $row['pedido'] = [];

                $pedido = $this->pedido->getBy(["empresa"=>$row["id"]]);

                if(!empty($pedido)) {
                    $row['pedido'] = $pedido;
                }

                $return[] = $row;
            }
        }

        return $return;
    }

    public function create($params) {

        //Verifica se o usuário já existe
        if(!$this->usuario->getBy(["email"=>$params["email"]])) {
            $return = $this->usuario->create($params);
        } else {
            throw new Exception("O e-mail informado já existe em nossa base de dados.", 1);
        }

        return $return;
    }

    public function edit($id, $params) {

        try {
            $this->usuario->updateById($id, $params);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 1);
        }
    }

    public function login($params) {

        $usuario = $this->usuario->getBy(["email"=>$params["email"], "senha"=>$params["senha"]]);

        if($usuario) {
            $_SESSION["user"] = reset($usuario);
            header("Location: http://inclusivedigital.com.br/taller/usuario/dashboard");
        } else {
            //retorna erro
            throw new Exception("Usuário ou senha incorretos.", 1);
        }
    }

    public function logout() {

        //Deslogar usuario, e redirecionar
        session_destroy();
        header("Location: http://inclusivedigital.com.br/taller/usuario/login"); /* Redirect browser */

    }
 }
