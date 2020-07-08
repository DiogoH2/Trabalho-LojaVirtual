<?php

function ler(){
    $conn = include_once (__DIR__.'/conn.php');
    $sql = 'SELECT * FROM usuarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


function create ($data){
    $conn = include_once (__DIR__.'/conn.php');
    $campo =implode (",",array_keys($data));
    $valores =implode ("','",$data);
    $sql = "INSERT INTO usuarios ($campo) Values ('$valores')";

    $conn ->query($sql);
}



function del ($email){


    $conn = include_once (__DIR__.'/conn.php');

    $sql ="DELETE FROM usuarios Where email = '$email'";
    $conn ->query($sql);
}
