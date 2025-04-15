<!-- <h1>Lista de receitas</h1>

<a href="index.php?menu=addreceita">
    <button type="button">Adicionar receita</button>
</a>

<br>
    
<table>
    <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th>Passo a passo</th>
        <th>Autor</th>
        <th>Tipo</th>
    </tr>

<?php

    if(isset($_POST['pesquisa'])){
        $termoPesquisado = $_POST['pesquisa'];
    }else{
        $termoPesquisado = "";
    }

    $sql = "SELECT id,
    (titulo) AS titulo,
    (descricao) AS descricao,
    (receita_texto) AS receita_texto,
    (autor) AS autor,
    (tipo) AS tipo
    FROM receitas WHERE
    id = '$termoPesquisado' OR
    titulo LIKE '%$termoPesquisado%'
    ORDER BY titulo ASC
    ";

    // faz o pedido 
    $query = mysqli_query($conect,$sql) or die("Erro na requisição!".mysqli_error($conect));

    // fetch_asso = vai acessar um query e contar os resultados 
    while($dados = mysqli_fetch_assoc($query)){
    ?>
        <tr>
            <td><?=$dados['titulo']?></td>
            <td><?=$dados['descricao']?></td>
            <td><?=$dados['receita_texto']?></td>
            <td><?=$dados['autor']?></td>
            <td><?=$dados['tipo']?></td>
                <td><a href="index.php?menu=editarReceita&id=<?=$dados['id']?>" class="btn-primary">Editar informações</a></td>
                <td><a href="index.php?menu=deletarReceita&id=<?=$dados['id']?>" class="btn-primary">Deletar receita</a></td>
        </tr>
    <?php
    }
?>

</table> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Receitas</title>
    <!-- Link para o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Lista de Receitas</h1>

        <!-- Botão para adicionar receita -->
        <a href="index.php?menu=addreceita" class="btn btn-success mb-4">Adicionar Receita</a>

        <!-- Tabela de receitas -->
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Passo a Passo</th>
                    <th>Autor</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Conexão com o banco de dados (substitua conforme necessário)
                    $conect = mysqli_connect("localhost", "root", "", "projeto_receitas");

                    if(isset($_POST['pesquisa'])){
                        $termoPesquisado = $_POST['pesquisa'];
                    } else {
                        $termoPesquisado = "";
                    }

                    // Consulta ao banco de dados
                    $sql = "SELECT id,
                                    (titulo) AS titulo,
                                    (descricao) AS descricao,
                                    (receita_texto) AS receita_texto,
                                    (autor) AS autor,
                                    (tipo) AS tipo
                            FROM receitas
                            WHERE id = '$termoPesquisado' OR titulo LIKE '%$termoPesquisado%'
                            ORDER BY titulo ASC";

                    $query = mysqli_query($conect, $sql) or die("Erro na requisição!".mysqli_error($conect));

                    while($dados = mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                        <td><?= htmlspecialchars($dados['titulo']) ?></td>
                        <td><?= htmlspecialchars($dados['descricao']) ?></td>
                        <td><?= nl2br(htmlspecialchars($dados['receita_texto'])) ?></td>
                        <td><?= htmlspecialchars($dados['autor']) ?></td>
                        <td><?= htmlspecialchars($dados['tipo']) ?></td>
                        <td>
                            <!-- Botões de editar e deletar -->
                            <a href="index.php?menu=editarReceita&id=<?= $dados['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="index.php?menu=deletarReceita&id=<?= $dados['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Link para o Bootstrap JS (se necessário) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
