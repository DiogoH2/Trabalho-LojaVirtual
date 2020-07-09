<?php
//Sessão
session_start();

//Conexão
require_once ('db_connect.php');


// Inserir produto
if(isset($_POST['btn-criar-produto'])){

    $url_img = mysqli_escape_string($connect, $_POST['url_img']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $marca = mysqli_escape_string($connect, $_POST['marca']);

    $sql = "INSERT INTO produto (id, descricao, valor, marca, url_img) VALUES ('','$descricao', $valor, '$marca', '$url_img')";

    if(mysqli_query($connect, $sql)){
        
        header('Location: ../produtos.php');
    }
  
}
