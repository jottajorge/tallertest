<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="../src/view/dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../src/view/dist/js/site.min.js"></script>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Bootflat-Admin</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <?php
              if(isset($_SESSION["user"])) {
              ?>
                <li class="active"><a href="http://inclusivedigital.com.br/taller/usuario/dashboard">Dashboard</a></li>
                <li class="active"><a href="http://inclusivedigital.com.br/taller/empresa/cadastrar">Cadastrar nova empresa</a></li>
                <li class="active"><a href="http://inclusivedigital.com.br/taller/pedido/cadastrar">Novo pedido</a></li>
                <li class="active"><a href="http://inclusivedigital.com.br/taller/usuario/editar">Minha conta</a></li>
                <li class="active"><a href="http://inclusivedigital.com.br/taller/usuario/logout">Sair</a></li>
              <?php } ?>
              <!-- <li class="disabled"><a href="#">Link</a></li> -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                <?php
                if(isset($_SESSION["user"])) {
                ?>
                  <li>
                    <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-home"></i>Login  <span class="glyphicon glyphicon-chevron-right"></span></a>
                      <li class="collapse" id="demo4">
                        <a href="http://inclusivedigital.com.br/taller/usuario/dashboard" class="list-group-item"><i class="glyphicon glyphicon-home"></i>Dashboard</a>
                        <a href="" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>Meus pedidos</a>
                        <a href="http://inclusivedigital.com.br/taller/pedido/cadastrar" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>Novo pedido</a>
                        <a href="http://inclusivedigital.com.br/taller/empresa/cadastrar" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>Cadastrar nova empresa</a>
                      </li>
                  </li>
                  <li class="list-group-item"><a href="http://inclusivedigital.com.br/taller/usuario/editar"><i class="glyphicon glyphicon-lock"></i>Minha conta</a></li>
                <?php }?>
                <li class="list-group-item"><a href="http://inclusivedigital.com.br/taller/usuario/cadastrar" ><i class="glyphicon glyphicon-lock"></i>Nova conta</a></li>
              </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Title</h3>
              </div>
              <div class="panel-body">
