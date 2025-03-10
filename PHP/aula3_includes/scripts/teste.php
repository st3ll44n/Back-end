
<?php
    echo "Olá mundo!";

    $repetir = true;
    $vezes = 10;
    $contador = 1;

        while ($repetir == true){
        echo "estou repetindo!";

        if ($contador == $vezes){
          break;
           // ou $repetir == false
        }

        $contador++;
    }
?>
    