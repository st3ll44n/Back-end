<h3>Atualizar receita</h3>

<?php
    $titulo = mysqli_real_escape_string($conect, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conect, $_POST['descricao']);
    $receita_texto = mysqli_real_escape_string($conect, $_POST['receita_texto']);
    $autor = mysqli_real_escape_string($conect, $_POST['autor']);
    $tipo = mysqli_real_escape_string($conect, $_POST['tipo']);

    $sql = "INSERT INTO receitas(
        titulo, 
        descricao, 
        receita_texto, 
        autor, 
        tipo
    )VALUES(
        '{$titulo}',
        '{$descricao}',
        '{$receita_texto}',
        '{$autor}',
        '{$tipo}'
    )";

    $sql = "UPDATE receitas SET
    titulo = '{$titulo}',
    descricao = '{$descricao}',
    receita_texto = '{$receita_texto}',
    autor = '{$autor}',
    tipo = '{$tipo}'
    WHERE id = '{$id}'
    ";

    mysqli_query($conect,$sql) or die("Erro ao atualizar");

echo "A receita foi atulizada!";
?>