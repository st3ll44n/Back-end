<h1>Você adicionou um novo carro! Parabéns!</h1>

<?php
    $modelo = mysqli_real_escape_string($conect, $_POST['modelo']);
    $marca = mysqli_real_escape_string($conect, $_POST['marca']);
    $valor = mysqli_real_escape_string($conect, $_POST['valor']);
    $ano = mysqli_real_escape_string($conect, $_POST['ano']);
    $cor = mysqli_real_escape_string($conect, $_POST['cor']);

    $sql = "INSERT INTO carros(
        modelo, 
        marca, 
        valor, 
        ano, 
        cor
    )VALUES(
        '{$modelo}',
        '{$marca}',
        '{$valor}',
        '{$ano}',
        '{$cor}'
    )";

    mysqli_query($conect,$sql) or die("Erro ao adicionar o carro".mysqli_error(($conect)));

    echo "O carro $modelo foi adicionado com sucesso!";
?>