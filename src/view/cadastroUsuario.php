<?php
include_once("header.php");
?>

<div class="content-row">
  <h2 class="content-row-title">Nova conta</h2>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="content-row">
         <div class="panel-body">
            <form role="form" action="../usuario/cadastrar" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
              </div>
              <div class="form-group">
                <label for="senha_repetir">Repetir senha</label>
                <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repetir senha" required>
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
