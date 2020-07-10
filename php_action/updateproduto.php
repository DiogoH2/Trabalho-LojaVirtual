<?php
//Sessão
session_start();

//Conexão
require_once ('db_connect.php');

if(isset($_POST['btn-editar-produto'])){

    $id = mysqli_escape_string($connect, $_POST['id']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $url_img = mysqli_escape_string($connect, $_POST['url_img']);
    

    $sql = "UPDATE produto  SET descricao = '$descricao', valor='$valor', marca='$marca', url_img='$url_img'  WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../produtos.php');
    }
    else {
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../produtos.php');
    }
}
