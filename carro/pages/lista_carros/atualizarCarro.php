<h3>Atualizar carro</h3>

<?php
    // defende de comandos que podem alterar o db
    $id = mysqli_real_escape_string($conect,$_POST['id_carro']);
    $modelo = mysqli_real_escape_string($conect,$_POST['modelo']);
    $marca = mysqli_real_escape_string($conect,$_POST['marca']);
    $valor = mysqli_real_escape_string($conect,$_POST['valor']);
    $ano = mysqli_real_escape_string($conect,$_POST['ano']);
    $cor = mysqli_real_escape_string($conect,$_POST['cor']);

    // UPDATE TABLE SET NAME = NAME WHERE ID -> preciso colocar o where id para especificar onde que quero mudar o nome, pq se n, todos os nomes serão mudados

    $sql = "UPDATE carros SET
    modelo = '{$modelo}',
    marca = '{$marca}',
    valor = '{$valor}',
    ano = '{$ano}',
    cor = '{$cor}'
    WHERE id_carro = '{$id}'
    ";

    mysqli_query($conect,$sql) or die("Erro ao atualizar");

    echo "O carro foi atualizado!";
?>