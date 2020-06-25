<?php

    include_once (__DIR__ .'/crud.php');

    $registro = read();

    $html = ' ';
    foreach ($registro as $registros){
        $html .= "<tr>
                        <td WIDTH=2>{$registros['id']}</td>
                        <td WIDTH=150>{$registros['Usuario']}</td>
                        <td>{$registros['Comentario']}</td>
                 </tr>
        ";
    }

    echo $html;


?>