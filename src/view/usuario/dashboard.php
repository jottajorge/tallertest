<?php
include_once("header.php");
?>
<div class="content-row">
  <h2 class="page-header">Dashboard</h2>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h2 class="content-row-title">Minhas empresas</h2>
      <table class="table table-hover">
        <thead>
          <th>Nome fantasia</th>
          <th>Cnpj</th>
          <th>Quantidade de pedidos</th>
        </thead>
        <tbody>
          <?php
          foreach ($data as $row) {
            ?>
            <tr>
              <td>
                <?php print $row["nome"]; ?>
              </td>
              <td>
                <?php print $row["cnpj"]; ?>
              </td>
              <td>
                <?php print count($row["pedido"]); ?>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php
    include_once("footer.php");
?>
