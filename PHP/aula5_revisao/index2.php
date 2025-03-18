<?php
    // INICIA SESSÃO
    session_start();

    class Produto{
        public $id;
        public $nome;
        public $valor;
        public $desc;

        public function __construct($id, $nome, $valor, $desc){
            $this->id = $id;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->desc = $desc;
        }
    }

    // public - qualquer parte do código mexe no atributo 
    // private - apenas o que está dentro do class

    // isset -> verifica se carrinho está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'][] = $produtosDados;
    }

    // ADICIONA PRODUTO
    // to sobrescrevendo no carrinho, mas o += mantém oq tava antes e adiciona
    if(isset($_GET['produto'])){
        $produtosDados = new Produto($_GET['id'],$_GET['produto'],$_GET['valor'],$_GET['desc']);
    // $_SESSION['carrinho'] += $_GET['produto'];
    // NOMEVARIAVEL[INDICEVAZIO] = PRODUTO PODE SER ADICIONADO
    // [] -> SUBSTITUTO DO +=
    $_SESSION['carrinho'][] =  $produtosDados ;
    }
    if(isset($_GET['deletarCarrinho'])){
       // session_destroy(); ou
       $_SESSION['carrinho'] = [];
    }
    // var_dump pra ver se deu certo
    //var_dump($_SESSION['carrinho']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="styles/style2.css">
</head>
<body>
    
    <h1>Carrinho de Compras</h1>

    <?php
        $valorTotal = 0;

        foreach($_SESSION['carrinho'] as $produto){
            $valorTotal += $produto->valor;
        }

        if($valorTotal == 0){
            echo "O carrinho está vazio!";
        }else{
            echo "O valor total é de R$ $valorTotal";
        }
    ?>
     
    <ol>
    <?php
        // foreach(array as alias){}
        //foreach(filmes as filme){ filme.nome , filme.desc }
        // $_SESSION['carrinho'] é o array 
        foreach($_SESSION['carrinho'] as $produto){
            echo "<li> 
            <h1>$produto->nome</h1>
            <p>R$ $produto->valor</p>
            <p>$produto->desc</p>
            </li>";
        }
    ?>
    </ol>
    
        <a href="?id=1&produto='Kit de Pincéis'&valor=120.00&desc='kit de pinceis com 5 pinceis de numeros 0 ao 4'"> Adicionar Pincel</a> <br>
        <a href="?id=2&produto='Tinta'&valor=120.00&desc='Tinta aquarela lavavel'">Adicionar Tinta</a> <br>
        <a href="?id=3&produto='Tela'&valor=120.00&desc='Tela 10x16 de algodão cru'">Adicionar Tela</a> <br>
        <a href="?id=4&produto='Diluidor'&valor=120.00&desc='Diluidor de tintas'">Adicionar Diluidor</a> 

    <!-- DELETAR -->
    <a href="?deletarCarrinho=True" class="delete">Deletar Carrinho</a>
    
    <!-- 'ul' é lista não numerada e 'ol' é lista numerada -->
    
</body>
</html>