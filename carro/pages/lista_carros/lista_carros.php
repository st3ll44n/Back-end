<h1>VOCÊ ESTA NA LISTA DE CARROS</h1>

<a href="index.php?menu=adicionarCarro">
    <button type="button">Adicionar carro</button>
</a>

<br>
<br>
    <form action="index.php?menu=lista" method="post">
        <input type="text" name="pesquisa" id="pesquisa">
        <button type="submit">PESQUISAR</button>
    </form>
    
<table>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>

<?php

    if(isset($_POST['pesquisa'])){
        $termoPesquisado = $_POST['pesquisa'];
    }else{
        $termoPesquisado = "";
    }

    $sql = "SELECT id_carro,
    upper(modelo) AS modelo,
    upper (marca) AS marca,
    upper (valor) AS valor,
    DATE_FORMAT(ano, '%d/%m/%y') AS ano,
    upper(cor) AS cor 
    FROM carros WHERE
    id_carro = '$termoPesquisado' OR
    modelo LIKE '%$termoPesquisado%'
    ORDER BY modelo ASC
    ";

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
            <td><a href="index.php?menu=editarCarro&id_carro=<?=$dados['id_carro']?>" class="btn-primary">Editar informações</a></td>
            <td><a href="index.php?menu=deletarCarro&id_carro=<?=$dados['id_carro']?>" class="btn-primary">Deletar carro</a></td>
        </tr>
    <?php
    }
?>

</table>