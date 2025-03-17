<?php
session_start();

// Definir uma lista simples de produtos
$produtos = [
    1 => ['nome' => 'Calça', 'preco' => 10.00],
    2 => ['nome' => 'Blusa', 'preco' => 20.00],
    3 => ['nome' => 'Casaco', 'preco' => 30.00]
];

// Adicionar produto ao carrinho
if (isset($_GET['adicionar'])) {
    $idProduto = $_GET['adicionar'];
    if (isset($produtos[$idProduto])) {
        $_SESSION['carrinho'][] = $produtos[$idProduto];
    }
}

// Exibir carrinho
if (isset($_GET['limpar'])) {
    // Limpar carrinho
    $_SESSION['carrinho'] = [];
}

// Calcular o total
$totalCarrinho = 0;
if (isset($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $item) {
        $totalCarrinho += $item['preco'];
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <div class="logo">Superstore</div>
        <div class="carrinho">
            <span>🛒 Carrinho (<?php echo isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0; ?>)</span>
        </div>
    </header>
    
    <section class="produtos">
        <h2>Produtos</h2>
        <div class="produtos-lista">
            <?php foreach ($produtos as $id => $produto): ?>
                <div class="produto">
                    <h3><?php echo $produto['nome']; ?></h3>
                    <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <a href="?adicionar=<?php echo $id; ?>" class="btn-adicionar">Adicionar ao Carrinho</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="carrinho-compras">
        <h2>Carrinho de Compras</h2>
        <?php if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])): ?>
            <ul>
                <?php foreach ($_SESSION['carrinho'] as $item): ?>
                    <li><?php echo $item['nome']; ?> - R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="total">
                <p><strong>Total:</strong> R$ <?php echo number_format($totalCarrinho, 2, ',', '.'); ?></p>
            </div>
            <a href="?limpar=true" class="btn-limpar">Limpar Carrinho</a>
        <?php else: ?>
            <p>Seu carrinho está vazio.</p>
        <?php endif; ?>
    </section>

    <script src="scripts/script.js"></script>
    
</body>
</html>