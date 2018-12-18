<?php require_once("cabecalho.php");
  require_once("logica-usuario.php");
?>
  <h1>Bem vindo!</h1>
  <?php
  if (usuarioEstaLogado()) { ?>
    <p class="text-success">Você está logado como <?= usuarioLogado() ?> (<a href="logout.php">Sair</a>)</p>
  <?php
  } else {
  ?>
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="email">e-mail:</label>
      <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input class="form-control" type="password" name="senha" id="senha">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  <?php } ?>
<?php include("rodape.php"); ?>
