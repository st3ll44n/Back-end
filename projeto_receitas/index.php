<?php
    include('database/conect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas.com</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <!-- bg- = backgroundcolor-cordesejada -->
        <nav class="navbar navbar-expand-lg bg-dark text-light">
            <!-- container(80% centralizado) -->
            <!-- container-fluid(100%) -->
            <!-- w- (width) (0,25,50,75,100) -->
            <!-- h- (height) -->
            <div class="container">
            <!-- logo -->
            <a class="navbar-brand text-light" href="index.php?menu=home">Receitas.com</a>
            <!-- botao mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="index.php?menu=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?menu=lista">Catalogo</a>
                </li>
                </ul>
                <form action="index.php?menu=lista" method="post">
                    <input type="text" name="pesquisa" id="pesquisa">
                    <button type="submit">Pesquisar</button>
                </form>
                </form>
            </div>
            </div>
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
                include('pages/lista/listaReceitas.php');
                break;
            case 'receita':
                include('pages/lista/receita.php');
                break;
            case 'receita1':
                include('pages/lista/receita1.php');
                break;
            case 'receita2':
                include('pages/lista/receita2.php');
                break;
            case 'addreceita':
                include('pages/lista/addreceita.php');
                break;
            case 'deletarReceita':
                include('pages/lista/deletarReceita.php');
                break;
            case 'editarReceita':
                include('pages/lista/editarReceita.php');
                break;
            case 'dbAddReceita':
                include('pages/lista/dbAddReceita.php');
                break;
            case 'atualizarReceita':
                include('pages/lista/atualizarReceita.php');
                    break;
            default:
                include("pages/home/home.php");
                break;
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script href='bootstrap/bootstrap_bundle.js'></script>

</body>

<footer>
    <nav class="navbar navbar-expand-lg bg-dark text-light">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand text-light mx-auto" href="index.php?menu=home"> © 2025 Receitas Deliciosas | Todos os direitos reservados.</a>
        </div>
    </nav>
</footer>


</html>