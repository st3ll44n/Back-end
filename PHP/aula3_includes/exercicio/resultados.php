<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <style>
    body { font-family: Arial, sans-serif; }
    .container { width: 50%; margin: 0 auto; padding: 20px; }
    h2 { text-align: center; }
    .resultados { margin-top: 20px; }
    .resultado { margin: 10px 0; }
    .input-group { margin-top: 20px; }
    button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
    button:hover { background-color: #45a049; }
    input { padding: 10px; width: 100%; margin-top: 10px; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Bem-vindo, <span id="nomeUser"></span></h2>
    <div class="resultados">
      <div class="resultado" id="cotacaoDolar"></div>
      <div class="resultado" id="verificarIdade"></div>
      <div class="resultado" id="numeroAleatorio"></div>

      <!-- Campo para conversão de reais para dólares -->
      <div class="input-group">
        <label for="valorReais">Valor em Reais (R$):</label>
        <input type="number" id="valorReais" placeholder="Digite o valor em Reais">
        <button onclick="converterParaDolares()">Converter para Dólares</button>
        <div id="resultadoConversao" class="resultado"></div>
      </div>
    </div>
  </div>

  <script>
    // Função para obter dados do localStorage
    function obterDados() {
      var nome = localStorage.getItem('nome');
      var idade = localStorage.getItem('idade');
      document.getElementById('nomeUser').textContent = nome;

      return { nome, idade };
    }

    // Função para buscar a cotação do dólar
    function obterCotacaoDolar() {
      fetch('https://api.exchangerate-api.com/v4/latest/USD')
        .then(response => response.json())
        .then(data => {
          var cotacao = data.rates.BRL;
          document.getElementById('cotacaoDolar').textContent = `Cotação do Dólar: R$ ${cotacao.toFixed(2)}`;
          localStorage.setItem('cotacaoDolar', cotacao); // Armazenando a cotação para usar na conversão
        });
    }

    // Função para verificar a idade
    function verificarIdade(idade) {
      var resultado = idade >= 18 ? 'Você é maior de idade.' : 'Você é menor de idade.';
      document.getElementById('verificarIdade').textContent = resultado;
    }

    // Função para gerar número aleatório
    function gerarNumeroAleatorio() {
      var numero = Math.floor(Math.random() * 100) + 1;
      document.getElementById('numeroAleatorio').textContent = `Número Aleatório: ${numero}`;
    }

    // Função para converter valor de reais para dólares
    function converterParaDolares() {
      var valorReais = document.getElementById('valorReais').value;
      var cotacao = localStorage.getItem('cotacaoDolar');

      if (valorReais && cotacao) {
        var valorDolares = (valorReais / cotacao).toFixed(2);
        document.getElementById('resultadoConversao').textContent = `R$ ${valorReais} é igual a US$ ${valorDolares}`;
      } else {
        document.getElementById('resultadoConversao').textContent = 'Por favor, insira um valor válido em Reais e aguarde a cotação ser carregada.';
      }
    }

    // Função principal para carregar os resultados
    function carregarResultados() {
      var { nome, idade } = obterDados();
      obterCotacaoDolar();
      verificarIdade(idade);
      gerarNumeroAleatorio();
    }

    // Carregar os resultados quando a página for carregada
    window.onload = carregarResultados;
  </script>
</body>
</html>