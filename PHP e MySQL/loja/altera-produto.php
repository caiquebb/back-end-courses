<?php require_once("cabecalho.php");
  require_once("banco-produto.php");

  $id = $_POST["id"];
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $descricao = $_POST["descricao"];
  $categoria_id = $_POST["categoria_id"];
  if(array_key_exists("usado", $_POST)) {
    $usado = "true";
  } else {
    $usado = "false";
  }

  if(alteraProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $id)) {
  ?>
    <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> alterado com sucesso!</p>
  <?php
  } else {
    $msg = mysqli_error($conexao);
  ?>
    <p class="text-danger">O produto <? = $nome; ?> não foi alterado: <?= $msg ?></p>
  <?php
  }
  ?>
<?php require_once("rodape.php"); ?>
