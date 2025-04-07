<?php
    include("database/conect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Catálogo de Comidas</title>
</head>
<body>
    <h1>Catálogo de Comidas</h1>
    <div class="container">
        <?php 
            $query = "SELECT * FROM catalogo";
            $stmt = mysqli_query($conect, $query);
            while ($item = mysqli_fetch_assoc($stmt)) :
        ?>
            <div class="item">
                <img src="<?php echo htmlspecialchars($item['imagem']); ?>" alt="<?php echo htmlspecialchars($item['nome']); ?>">
                <h2><?php echo htmlspecialchars($item['nome']); ?></h2>
                <p>Preço: R$ <?php echo number_format($item['valor'], 2, ',', '.'); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
