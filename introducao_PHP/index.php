<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio PHP</title>
</head>

<body>
    <h1>hello world</h1>

    <?php
    // COMANDOS NÃO CASE SENSITIVE (UCASE OR LCASE)

    // echo é o escreval do php ele imprime
        echo "Stella Andrade <br>";
        echo "Coca cola <br>";

    // $ reprensenta variavel
    // variaveis são case sensitive 
        $palavra = "Bolo <br>";
        echo $palavra;

        $PALAVRA = "Banana <br>";
        echo $PALAVRA;

        echo date("d / m / Y");
        // echo date_default_timezone_set("America/Sao Paulo");
        echo date_default_timezone_get();
        echo date("G:i:s T")

        // phpinfo();
    ?>

</body>

</html>