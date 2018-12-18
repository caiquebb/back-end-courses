<div class="form-group">
  <label for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Produto" value="<?=$produto["nome"]?>">
</div>
<div class="form-group">
  <label for="preco">Preço:</label>
  <input class="form-control" type="text" name="preco" id="preco" placeholder="Valor" value="<?=$produto["preco"]?>">
</div>
<div class="form-group">
  <label for="categoria_id">Categoria:</label>
  <select class="form-control" id="categoria_id" name="categoria_id">
    <?php
    foreach ($categorias as $categoria) {
      $selected = $categoria["id"] == $produto["categoria_id"] ? "selected" : ""
    ?>
    <option value="<?=$categoria["id"]?>" <?=$selected?>><?=$categoria["nome"]?></option>
    <?php
    }
    ?>
  </select>
</div>
<div class="form-group">
  <div class="checkbox">
    <label>
      <input type="checkbox" name="usado" value="true" <?=$checked?>>Usado
    </label>
  </div>
</div>
<div class="form-group">
  <label for="descricao">Descrição:</label>
  <textarea class="form-control" name="descricao" id="descricao"><?=$produto["descricao"]?></textarea>
</div>
