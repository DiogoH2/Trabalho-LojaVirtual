<?php
$conn = include ('./CrudAdm.php');

if(isset($_POST['criarADM'])){

    unset ($_POST['criarADM']);
    
    create ($_POST);

    header('location: ../ContaAdm.php');

}