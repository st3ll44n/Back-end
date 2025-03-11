<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <main>
        <form action="assets/scripts/login.php" method="post">
            <!-- email -->
             <div class="form-group">
                    <label for="email">Email:</label>
                    <input placeholder="Escreva aqui seu email" type="email" required name="email" id="email"></input>
             </div>
            <!-- senha -->
             <div>
                <label for="senha">Senha:</label>
                <input placeholder="Digite sua senha" type="password" require name = "senha" id="senha">
             </div>
             <button type="submit">LOGIN</button>

             <p>Esqueceu a senha?</p> <a href="#">Clique aqui!</a><br>
             <p>Não possui conta?</p> <a href="assets/pages/cadastrar.php">Cadastre-se!</a>


        </form>
    </main>

</body>

<!-- 
nome 
senha
email
 -->

</html>