<?php
    session_start();
    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
        $adm = $_SESSION['usuario'][1];
        $cliente = $_SESSION['usuario'][0];


    }else{

        echo "<script>window.location = 'index.php'</script>";
    }
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
    include ('./navLog.php')
  ?>

    <h1 class="titulos">Cadastro de Produtos</h1>
<article>
    <form action="CrudAdmCliente/controllerAdm.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Imagem</label>
        <input class="form-control" type="text" name="img" placeholder="Url Da imagem">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nome</label>
        <input class="form-control" type="text" name="nomeProduto" placeholder="Nome do produto">
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Preço</label>
        <input class="form-control" type="text" name="preço" placeholder="Preço do Produto">
      </div>
      <div  class="form-group">
      <label for="exampleInputPassword1">Oferta</label>
        <input class="form-control" type="text" name="oferta" maxlength="1"  placeholder="Adm">
      </div>
      <button type="submit" class="btn btn-primary" name="criarProduto">Enviar</button>
    </form>
  </article>
    <?php 
    include ('./footer.php')
    ?>
   </div>
</body>
</html>