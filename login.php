<?php
 include_once(__DIR__.'/conta.php');

  if(isset($_POST['nome']) && ($_POST['senha']) && $conn != null){
    $query = $conn->prepare("SELECT * FROM usuarios Where nome = ? AND senha = ?");
    $query->execute(array($_POST['nome'], $_POST['senha']));

     if($query->rowCount()){
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

        session_start();
        $_SESSION["usuario"] = array($user["nome"], $user["adm"]);
        echo "<script>window.location = 'chat.php'</script>";
     }else{
      echo "<script>window.location = 'index.php'</script>";

     }

  }else{
    echo  "<script>window.location = 'index.php'</script>";


  }