<?php include("cabecalho.php") ?>
<form action="envia-contato.php" method="post">
  <h2>Cotato</h2>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">e-mail:</label>
    <input type="email" name="email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="mensagem">Mensagem:</label>
    <textarea name="mensagem" rows="8" cols="40" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php include("rodape.php") ?>
