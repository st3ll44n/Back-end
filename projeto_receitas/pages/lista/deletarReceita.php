
<h1>Apague a receita!</h1>

<?php
    $id = $_GET['id'];
    
    $sql="DELETE FROM receitas WHERE id = {$id}";
    $query = mysqli_query($conect,$sql) or die("Erro ao executar o delete".mysqli_error($conect));
    // $dados = mysqli_fetch_assoc($query);
 
    echo "A receita de N° $id foi apagada!";
?>
