<h1>Delete o carro!</h1>

<?php
    $id = $_GET['id_carro'];
    
    $sql="DELETE FROM carros WHERE id_carro = {$id}";
    $query = mysqli_query($conect,$sql) or die("Erro ao executar o delete".mysqli_error($conect));
    // $dados = mysqli_fetch_assoc($query);
 
    echo "O carro de N° $id foi deletado!";
?>
