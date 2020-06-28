<?php
 session_start();
 if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
     require("sysLogin/conta.php");
     $adm = $_SESSION['usuario'][1];
     $cliente = $_SESSION['usuario'][0];


 }else{

     echo "<script>window.location = 'index.php'</script>";
 }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso - <?php echo $nome; ?></title>
    </head>
    <body>
        <?php if($adm): ?>
            <table width="40%">
                <thead>
                    <tr style="font-weight: bold">
                        <td>Email</td>
                        <td>Senha</td>
                        <td>Nome</td>
                        <td>ADM</td>
                        <td>ID</td>
                    </tr>                
                </thead>
                <tbody>
                    <?php
                        include_once(__DIR__.'/CrudAdmCliente/acessoConta.php')
                       ?>
                </tbody>            
            </table>
        <?php endif; ?>

        <a href="sysLogin/logout.php">Sair</a>
    </body>
</html>