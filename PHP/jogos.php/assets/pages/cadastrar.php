<?php
    include "../componentes/baseHTML.php"
?>

<main>
    <form action="../scripts/cadastro.php" method="post">
        <input type="text" id="nome" name="nome">
        <input type="email" id="email" name="email">
        <input type="password" id="senha" name="senha">
            <button type="submit">Cadastro</button>
    </form>
</main>

<?php
    include "../componentes/baseScriptHtml.php"
?>