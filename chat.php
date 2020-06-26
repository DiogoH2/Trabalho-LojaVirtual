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
  include ('./menu.php')
?>

<h1 class="titulos">Comentarios</h1>
    <article class="coment">
    <form action="Crud/controller.php" method="post">
          <div style="margin: 10px auto"> 
            <input type="text" name="comentario" size="100"  placeholder="Deixe seu comentario aqui!!!">
          </div>
          <div style="margin: 5vh auto">
            <button type="submit" name="enviar">Enviar</button>
            <div style="margin: 10vh auto">
            <table border="3" style="width: 80%;" bgcolor="white" >
              <thead>
                <tr>
                  <th hidden WIDTH=2>id</th>
                  <th hidden>Comentario</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                include_once(__DIR__.'/Crud/registro.php')
              ?>
              </td>
              </tbody>
            </table>
          </div>
        </form>
    </div>  
          </div>
    </article>
    <br>
    <?php 
    include ('./footer.php')
    ?>
</div>
</body>
</html>