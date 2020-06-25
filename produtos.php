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
    <article>
    
    </article>
    <?php 
    include ('./footer.php')
    ?>
   </div>
</body>
</html>