<!-- Conexão parar adicionar ao banco de dados -->
<!-- Formulário para adição de dados -->

<!-- <form action="index.php?menu=lista" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <button type="submit">Pesquisar</button>
</form> -->

<!-- <br>
    <form action="index.php?menu=dbAddReceita" method="post">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" id="titulo" name="titulo"> 
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao"> 
        </div>
        <div class="form-group">
            <label for="receita_texto">Passo a passo</label>
            <input type="text" id="receita_texto" name="receita_texto"> 
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor"> 
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo">
                <option value="doce">Doce</option>
                <option value="salgado">Salgado</option>
                <option value="bebida">Bebida</option>
                <option value="outro">Outros</option>
            </select>
        </div>
        <button type="submit">Cadastrar!</button>
    </form> -->


<?php
    $id = $_GET['id'] ?? 0;

    $id = intval($id);

    $sql = "SELECT * FROM receitas WHERE id = {$id}";
    $query = mysqli_query($conect, $sql) or die("Erro ao executar a consulta: " . mysqli_error($conect));
    $dados = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Receita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Cadastrar Nova Receita</h2>

    <form action="index.php?menu=dbAddReceita" method="post">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="receita_texto" class="form-label">Passo a passo</label>
            <textarea id="receita_texto" name="receita_texto" class="form-control" rows="6" required></textarea>
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" id="autor" name="autor" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select name="tipo" id="tipo" class="form-select" required>
                <option value="" selected disabled>Selecione o tipo de receita</option>
                <option value="Doce">Doce</option>
                <option value="Salgado">Salgado</option>
                <option value="Bebida">Bebida</option>
                <option value="Outro">Outros</option>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <a href="index.php?menu=lista" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-success">Cadastrar!</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS Bundle (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

