<h1>VOCÊ ESTA NA LISTA DE CARROS</h1>

<a href="index.php?menu=adicionarCarro">
    <button type="button">Adicionar carro</button>
</a>

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
            <td><a href="index.php?menu=editarCarro&id_carro=<?=$dados['id_carro']?>" class="btn btn-primary">Editar informações</a></td>
        </tr>
    <?php
    }
?>

</table>