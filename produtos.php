<?php
  include_once('./iniciarSession.php');

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
      <button type="submit" class="btn btn-success" name="btn-criar-produto">Cadastrar</button>
    </form>
  </article>

<br>
<hr>
<br>

  <aside>
  <div class="row">
    <div class="col-12">
        <h3 class="light">Lista de produtos</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Url da imagem</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "SELECT * FROM produto";
                    $resultado = mysqli_query($connect, $sql);

                    while($dados = mysqli_fetch_array($resultado)){

                    

                ?>
                <tr>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['descricao']; ?></td>
                    <td><?php echo $dados['valor']; ?></td>
                    <td><?php echo $dados['marca']; ?></td>
                    <td><?php echo $dados['url_img']; ?></td>
                    <td><a href="editarproduto.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning"><i class="material-icons">Editar</i></a></td>
                    <td><a href="editarproduto.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger">Deletar</button></td>
                    
                   
                        
                        
                   
                    <!-- Modal Structure -->
                       

                            
                        </div>
                </tr>
                    <?php } ?>

                      
                   
            </tbody>
        </table>
        <br>
        
    </div>
</div>
  </aside>

    <?php 
    include ('./footer.php')
    ?>
   </div>
</body>
</html>