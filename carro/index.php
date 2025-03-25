<!-- FAZER IMPLEMENTAÇÃO DESSE CODIGO NO E-FILMES -->

<?php
    include('database/conect.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php?menu=home">Home</a>
            <a href="index.php?menu=lista">Lista</a>
        </nav>
    </header>

    <main>
        <?php
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
            $pagina = "home";
        }
            
        switch($pagina){
            case 'home':
                include("pages/home/home.php");
                break;
            case 'lista':
                include("pages/lista_carros/lista_carros.php");
                break;
            case 'adicionarCarro':
                include("pages/lista_carros/adicionarCarro.php");
                break;
                            case 'adicionarCarro':
                include("pages/lista_carros/adicionarCarro.php");
                break;
            case 'dbAddCarro':
                include("pages/lista_carros/dbAddCarro.php");
                break;
            default:
                include("pages/home/home.php");
                break;
        }
        ?>
    </main>

    <script href='bootstrap/bootstrap.bundle.js'></script>

</body>
</html>