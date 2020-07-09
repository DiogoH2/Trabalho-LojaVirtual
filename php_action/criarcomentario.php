<?php
//Sessão
session_start();

//Conexão
require_once ('db_connect.php');


// Criar comentario
if(isset($_POST['btn-cadastrar-coment'])){

   
    $comentario = mysqli_escape_string($connect, $_POST['comentario']);
 

    $sql = "INSERT INTO comentarios (comentario) VALUES ('$comentario')";

    if(mysqli_query($connect, $sql)){
        
        header('Location: ../chat.php');
    }
  
}
