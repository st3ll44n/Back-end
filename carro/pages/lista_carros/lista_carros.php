<h1>VOCÊ ESTA NA LISTA DE CARROS</h1>

<table>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>

<?php
    $sql = "SELECT * FROM carros";
    // faz o pedido 
    $query = mysqli_query($conect,$sql) or die("Erro na requisição!".mysqli_error($conect));

    // fetch_asso = vai acessar um query e contar os resultados 
    while($dados = mysqli_fetch_assoc($query)){
    ?>
        <tr>
            <td><?=$dados['modelo']?></td>
            <td><?=$dados['marca']?></td>
            <td><?=$dados['valor']?></td>
            <td><?=$dados['ano']?></td>
            <td><?=$dados['cor']?></td>
        </tr>
    <?php
    }
?>

</table>