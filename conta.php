<?php

$server = '127.0.0.1';
$user = 'root';
$password = '';
$bd = 'conta';

try{
$conn = new PDO ("mysql:host=$server;dbname=$bd",$user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    echo `Erro De Conexão:{$erro->getMessage ()}`;
    $conn = null;

};


