<?php
 include_once(__DIR__.'/conta.php');
  //Confirmando se esta recebendo nome e senha 
  if(isset($_POST['nome']) && ($_POST['senha']) && $conn != null){
   //Execuntando o Select no banco 
   //?= pra atribuir o valor quando for executado 
    $query = $conn->prepare("SELECT * FROM usuarios Where nome = ? AND senha = ?");
    //Passando o valor da ?
    $query->execute(array($_POST['nome'], $_POST['senha']));
    //condição para trazer resultado do select com contador
     if($query->rowCount()){
    // pegando o usuario do banco
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
    //iniciando sessão
        session_start();
    //nova sessão pra mostrar que o usuario esta logado
        $_SESSION["usuario"] = array($user["nome"], $user["adm"]);
    //sessão iniciada ira ser redirecionado para home
        echo "<script>window.location = '../index.php'</script>";
     }else{
      echo "<script>window.location = '../index.php'</script>";

     }

  }else{
    echo  "<script>window.location = '../index.php'</script>";


  }