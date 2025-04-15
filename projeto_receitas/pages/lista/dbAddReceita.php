
<h1>Você adicionou uma nova receita! Parabéns!</h1>

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

    mysqli_query($conect,$sql) or die("Erro ao adicionar a receita".mysqli_error(($conect)));

    echo "A receita $titulo foi adicionada com sucesso!";
?>
