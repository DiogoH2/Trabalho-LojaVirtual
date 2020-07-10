<?php
  //Conexão
  include_once('php_action/db_connect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="img/favicon.jpg">
    <title>ShoesGO</title>
  </head>
<body>
    <div class="container-fluid">
    <?php

    include ('./menu.php');

    ?>
    <article>
    <form action="php_action/index.php" method="get">
    <div class="input-group mb-3 col-10 text-center">
                <input type="text" class="form-control" name="produto" placeholder="Pesquise seu produto!!" aria-label="Comentario" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" name="btn-pesquisar-produto" id="button-addon2">OK</button>
            </div>
    </div>
    </form>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://adrenaline.com.br/uploads/chamadas/Intel-Core-i9-10900K-54GHz-overclock-chamada.jpg" height="380" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://adrenaline.com.br/uploads/chamadas/Intel-Core-i9-10900K-54GHz-overclock-chamada.jpg" height="380" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://adrenaline.com.br/uploads/chamadas/Intel-Core-i9-10900K-54GHz-overclock-chamada.jpg" height="380" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </article><br><br>
    <aside>
    
    <div class="row"> 
    <?php
                if(!isset ($_POST['btn-pesquisar-produto']))
               {
                    
               
               
                    $sql = "SELECT * FROM produto ";
                    $resultado = mysqli_query($connect, $sql);
               
               
                    while($dados = mysqli_fetch_array($resultado)){

                    

                ?>
        <div class="card col-xl-3 offset-xl-3" style="width: 10rem;">
            <img class="card-img-top" height="340" src="<?php echo $dados['url_img']; ?>" alt="Imagem de capa do card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $dados['descricao']; ?></h5>
            <p class="card-text">Valor: <?php echo "R$ " . $dados['valor']; ?></p>
            <p class="card-text">Marca: <?php echo $dados['marca']; ?></p>
        </div>
        </div>
            <?php } } ?>
        
        
    </div> 
    </div> 
    </aside>
    <br>
    <?php 
    include ('./footer.php')
    ?>
    </div>
  </body>
  </html>