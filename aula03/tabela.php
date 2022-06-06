<?php
$nome = 'gabriel';
$cidade = 'goiania';
?>

 <table>
    <caption>Dados vindo do php</caption>

    <tr>
    <th>Nome</th>
    <th>Idade</th>
    </tr>
            
    <tr>
        <td><input value="<?php echo $nome ?>" /></td>
        <td><input value="<?php echo $cidade ?>" /></td>
    </tr>
</table>