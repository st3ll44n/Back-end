<!-- pode vir com varios nomes como conection, conn, conexao, etc -->

<?php
    include("config.php");

    // mysli_connct = conecta o projeto com o banco
    $conect = mysqli_connect(servidor, usuario, senha, banco) or die ("erro na conexão com o serviço!".mysqli_connect_error());
?>