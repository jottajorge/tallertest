<?php
include_once("header.php");
?>

<div class="content-row">
  <h2 class="content-row-title">Cadastrar nova empresa</h2>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="content-row">
         <div class="panel-body">
            <form role="form" action="cadastrar" method="post">
              <div class="form-group">
                <label for="nome">Nome fantasia</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome fantasia" required>
              </div>
              <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" required>
              </div>
              <button type="submit" class="btn btn-default">Enviar</button>
            </form>
          </div>
        </div>

        <?php
        if(isset($success)) {
        ?>
          <div class="content-row">
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Sucesso!</strong> <?php print $success; ?>
            </div>
          </div>
        <?php
        }

        if(isset($fail)) {
        ?>
          <div class="content-row">
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Erro!</strong> <?php print $fail; ?>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</div>

<?php
    include_once("footer.php");
?>
