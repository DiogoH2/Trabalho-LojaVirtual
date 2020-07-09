<?php
    session_start();
    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
        $adm = $_SESSION['usuario'][1];
        $cliente = $_SESSION['usuario'][0];


    }else{

        echo "<script>window.location = 'index.php'</script>";
    }
?>