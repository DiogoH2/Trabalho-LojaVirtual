<?php
  include_once('./iniciarSession.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="image/favicon.jpg">
    <title>ShoesGO</title>
  </head>
<body>
  <div class="container-fluid">
  <?php 
    include ('./navLog.php');

    ?>

    <h1 class="titulos">Cadastro de Produtos</h1>
<article>
    <form action="php_action/cadastrarproduto.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Imagem</label>
        <input class="form-control" type="text" name="url_img" placeholder="Url Da imagem">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Descrição</label>
        <input class="form-control" type="text" name="descricao" placeholder="Nome do produto">
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Valor</label>
        <input class="form-control" type="double" name="valor" placeholder="Preço do Produto">
      </div>
      <div  class="form-group">
      <label for="exampleInputPassword1">Marca</label>
        <input class="form-control" type="text" name="marca"   placeholder="Marca">
      </div>
      <button type="submit" class="btn btn-primary" name="btn-criar-produto">Cadastrar</button>
    </form>
  </article>
    <?php 
    include ('./footer.php')
    ?>
   </div>
</body>
</html>