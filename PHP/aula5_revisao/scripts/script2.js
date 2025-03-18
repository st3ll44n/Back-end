// Função para adicionar produto ao carrinho
function adicionarProduto(id, nome, valor, desc) {
    const url = `?id=${id}&produto=${encodeURIComponent(nome)}&valor=${valor}&desc=${encodeURIComponent(desc)}`;
    window.location.href = url;
}

// Função para atualizar o carrinho exibido na página
function atualizarCarrinho() {
    const carrinhoLista = document.getElementById("carrinho-lista");
    carrinhoLista.innerHTML = ""; // Limpa a lista atual
    
    // Obtém o carrinho armazenado na sessão
    fetch("/carrinho.json") // Aqui você pode obter os dados do carrinho de um arquivo JSON ou de uma API
        .then(response => response.json())
        .then(carrinho => {
            if (carrinho.length === 0) {
                carrinhoLista.innerHTML = "<li>Carrinho vazio.</li>";
            } else {
                carrinho.forEach(item => {
                    const itemHTML = `
                        <li>
                            <h3>${item.nome}</h3>
                            <p>Preço: R$ ${item.valor}</p>
                            <p>${item.desc}</p>
                            <button class="btn-remover" onclick="removerProduto(${item.id})">Remover</button>
                        </li>
                    `;
                    carrinhoLista.innerHTML += itemHTML;
                });
            }
        });
}

// Função para remover produto do carrinho
function removerProduto(id) {
    const url = `?deletarProduto=${id}`;
    window.location.href = url; // Chama PHP para processar a remoção
}

// Atualiza o valor total do carrinho
function atualizarTotal() {
    fetch("/carrinho.json")
        .then(response => response.json())
        .then(carrinho => {
            const total = carrinho.reduce((acc, produto) => acc + produto.valor, 0);
            document.getElementById("valor-total").textContent = `Valor total: R$ ${total}`;
        });
}

// Chama a função de atualização do carrinho ao carregar a página
window.onload = function() {
    atualizarCarrinho();
    atualizarTotal();
};
