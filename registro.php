<?php

    include_once (__DIR__ .'/crud.php');

    $registro = ler();

    $html = ' ';
    foreach ($registro as $registros){
        $html .= "<tr>
                        <td WIDTH=2 hidden>{$registros['id']}</td>
                        <td>{$registros['Comentario']}</td>
                        <td WIDTH=10><button type=submit name=excluir>Deletar</button></td>
                 </tr>
        ";
    }

    echo $html;


?>