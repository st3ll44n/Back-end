<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
a
    <a href="pagina2.php">Pag 2</a>
    <?php

        include_once "scripts/header.php";
        include_once "scripts/teste.php";
        include_once "scripts/teste.php";

        require_once "scripts/teste2.php"
    ?>
</body>
</html>