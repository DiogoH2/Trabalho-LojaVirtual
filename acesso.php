<?php
 session_start();
 if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
     require("conta.php");
     $adm = $_SESSION['usuario'][1];
     $cliente = $_SESSION['usuario'][0];


 }else{

     echo "<script>window.location = 'index.php'</script>";
 }
?>
<html>
    <head>
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
                        $query = $conn->prepare("SELECT * FROM usuarios");
                        $query->execute();
                
                        $users = $query->fetchAll(PDO::FETCH_ASSOC);

                        for($i = 0; $i < sizeof($users); $i++):
                            $usuarioAtual = $users[$i];
                    ?>
                    <tr>
                        <td><?php echo $usuarioAtual["email"]; ?></td>
                        <td><?php echo $usuarioAtual["senha"]; ?></td>
                        <td><?php echo $usuarioAtual["nome"]; ?></td>
                        <td><?php echo $usuarioAtual["adm"]; ?></td>
                        <td><?php echo $usuarioAtual["id"]; ?></td>
                    </tr>
                    <?php endfor; ?>
                </tbody>            
            </table>
        <?php endif; ?>

        <a href="logout.php">Sair</a>
    </body>
</html>