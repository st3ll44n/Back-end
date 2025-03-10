<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Dados</title>
  <style>
    body { font-family: Arial, sans-serif; }
    .container { width: 50%; margin: 0 auto; padding: 20px; }
    .input-group { margin-bottom: 20px; }
    button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
    button:hover { background-color: #45a049; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Digite seus dados</h2>
    <div class="input-group">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" required>
    </div>
    <div class="input-group">
      <label for="idade">Idade:</label>
      <input type="number" id="idade" required>
    </div>
    <button onclick="enviarDados()">Enviar</button>
  </div>

  <script>
    function enviarDados() {
      var nome = document.getElementById('nome').value;
      var idade = document.getElementById('idade').value;

      if (nome && idade) {
        localStorage.setItem('nome', nome);
        localStorage.setItem('idade', idade);
        window.location.href = 'resultados.php'; // Redireciona para a página de resultados
      } else {
        alert('Por favor, preencha todos os campos.');
      }
    }
  </script>
</body>
</html>
