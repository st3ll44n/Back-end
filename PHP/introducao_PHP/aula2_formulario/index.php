<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>    

    <main>

    <h2>Cadastro</h2>
<br>
        <form action="#">
            <!-- NOME DO USUARIO -->
                <div class="form-input">
                    <label for="">Nome</label>
                    <input placeholder="Escreva seu nome aqui!" name="nome" id="nome" type="text">
                </div>
<br>
            <!-- EMAIL USUARIO -->
                <div class="form-input">
                    <label for="">Email</label>
                    <input placeholder="Escreva seu email aqui!" name="email" id="email" type="email">
                </div>
<br>
            <!-- SENHA USUARIO -->
                <div class="form-input">
                    <label for="">Senha</label>
                    <input placeholder="Escreva sua senha aqui!" name="senha" id="senha" type="password">
                </div>
<br>

    <a href="menu.php">
    <button type="button">Enviar</button>
    </a>
              
        </form>
    </main>

</body>

</html>