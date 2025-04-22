<!-- 
<?php
    $id = $_GET['id'];
    echo "Essa é a receita de N° $id";

    $sql="SELECT * FROM receitas WHERE id = {$id}";
    $query = mysqli_query($conect,$sql) or die("Erro ao executar a consulta".mysqli_error($conect));
    $dados = mysqli_fetch_assoc($query);
?>
    <h2>Edite a receita aqui!</h2>

    <form action="index.php?menu=atualizarReceita" method="post">
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
            <input type="text" id="tipo" name="tipo"> 
        </div>
            <button type="submit">Finalizar edição!</button>
    </form> -->

<!-- HTML com Bootstrap -->
<div class="container mt-5">
    <h2 class="mb-4">Editar Receita</h2>

    <form action="index.php?menu=atualizarReceita" method="post">
        <!-- Campo oculto com o ID -->
        <input type="hidden" name="id" value="<?= $dados['id'] ?>">

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="<?= htmlspecialchars($dados['titulo']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?= htmlspecialchars($dados['descricao']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="receita_texto" class="form-label">Passo a passo</label>
            <textarea id="receita_texto" name="receita_texto" class="form-control" rows="6" required><?= htmlspecialchars($dados['receita_texto']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" id="autor" name="autor" class="form-control" value="<?= htmlspecialchars($dados['autor']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" id="tipo" name="tipo" class="form-control" value="<?= htmlspecialchars($dados['tipo']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Finalizar Edição!</button>
        <a href="index.php?menu=lista" class="btn btn-secondary">Cancelar</a>
    </form>
</div>