<?php
include_once("header.php");
?>

<div class="content-row">
  <h2 class="content-row-title">Cadastrar novo pedido</h2>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="content-row">
         <div class="panel-body">
            <form role="form" action="#" method="post">

              <div class="form-group">
                <label for="empresa">Empresa</label>
                <select name="empresa" class="selecter_1">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="form-group">
                <label for="produto">Produto</label>
                <select name="produto" class="selecter_1">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade de produto">
              </div>

              <div class="form-group">
                <label for="nome">Nome fantasia</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome fantasia">
              </div>

              <button type="button" class="btn btn-default">Enviar</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include_once("footer.php");
?>
