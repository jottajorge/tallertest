<?php
session_start();
$url = "/taller-test/";

#remove the directory path we don't want
$request  = str_replace($url, "", $_SERVER['REQUEST_URI']);

#split the path by '/'
$pieces = explode("/", $request);

if(!empty($pieces)){

    $controller = $pieces[0];

    if(isset($pieces[1])){
        $method = $pieces[1];
    }

    if(isset($pieces[2])){
        $param = $pieces[2];
    }
}

//Rotas existentes no sistema
$routes     = [ 'produto/cadastrar',
                'produto/listar',
                'empresa/cadastrar',
                'empresa/listar',
                'pedido/cadastrar',
                'pedido/listar',
                'usuario/dashboard',
                'usuario/cadastrar',
                'usuario/login',
                'usuario/logout',
                'usuario/editar'];

//Rotas protegidas por login
$protected  = [ 'produto/cadastrar',
                'produto/listar',
                'empresa/cadastrar',
                'empresa/listar',
                'pedido/cadastrar',
                'pedido/listar',
                'usuario/dashboard',
                'usuario/logout',
                'usuario/editar'];

if(!isset($method)){
    $method = "index";
}

if(in_array($controller."/".$method, $routes)) {

    //Verifica se a rota solicitada precisa de login
    if(in_array($controller."/".$method, $protected)) {

        //Verifica se existem os dados na sessão
        if(!isset($_SESSION["user"])) {
            $controller = "usuario";
            $method     = "login";
        }
    }

    //Monta a rota para incluir o controlador
    $path = "";
    $path = "src/".trim($controller) . "/Controller" . ucfirst(trim($controller)) . ".php";

    switch ($controller) {

        case 'produto':
            include($path);
            $route = new RepositoryProduto($method);

            break;

        case 'usuario':
            include($path);
            $route = new ControllerUsuario($method);

            break;

        case 'empresa':
            include($path);
            $route = new ControllerEmpresa($method);

            break;

        case 'pedido':
            include($path);
            $route = new ControllerPedido($method);

            break;

        default:
            include "404.php";
            break;
    }

}else{
    include "404.php";
}
