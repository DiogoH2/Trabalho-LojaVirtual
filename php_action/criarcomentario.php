<?php
//Sessão
session_start();

//Conexão
require_once ('db_connect.php');

if(isset($_POST['btn-cadastrar-coment'])){

   
    $comentario = mysqli_escape_string($connect, $_POST['comentario']);
 

    $sql = "INSERT INTO comentarios (comentario) VALUES ('$comentario')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../chat.php');
    }
    else {
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../chat.php');
    }
}
