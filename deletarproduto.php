<?php
//Sessão
session_start();

//Conexão
require_once ('db_connect.php');

?>

<?php
                    $sql = "SELECT * FROM produto";
                    $resultado = mysqli_query($connect, $sql);

                    while($dados = mysqli_fetch_array($resultado)){

                    

                ?>
                <tr>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['descricao']; ?></td>
                    <td><?php echo $dados['valor']; ?></td>
                    <td><?php echo $dados['marca']; ?></td>
                    <td><?php echo $dados['url_img']; ?></td>
                    <td><a href="editarproduto.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning"><i class="material-icons">Editar</i></a></td>
                    <td><a href="editarproduto.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger">Deletar</button></td>
                    
                   
                        
                        
                   
                    <!-- Modal Structure -->
                       

                            
                        </div>
                </tr>
                    <?php } ?>

<?php
if(isset($_POST['btn-deletar-produto'])){

{
  
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE  FROM produto  WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../produtos.php');
    }
    else {
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('Location: ../produtos.php');
    }
}
}

?>