<?php
//Sessão
session_start();

//Conexão
require_once ('db_connect.php');

if(isset($_POST['btn-pesquisar-produto'])){

   
    $produto = mysqli_escape_string($connect, $_POST['produto']);
    
    $sql = "SELECT * FROM comentarios WHERE descricao = '$produto'";    
    $resultado = mysqli_query($connect, $sql);

    if(mysqli_query($connect, $sql)){
   
        header('Location: ../chat.php');
    }

  
}
