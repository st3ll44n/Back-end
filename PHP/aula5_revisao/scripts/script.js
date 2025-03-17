let carrinho = [];
let total = 0;

function atualizarCarrinho() {
    const carrinhoElement = document.getElementById('itens-carrinho');
    const totalElement = document.getElementById('total');
    
    if (carrinho.length === 0) {
        carrinhoElement.innerHTML = '<p>Seu carrinho está vazio.</p>';
    } else {
        carrinhoElement.innerHTML = '';
        carrinho.forEach(item => {
            const div = document.createElement('div');
            div.innerHTML = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
            carrinhoElement.appendChild(div);
        });
    }

    totalElement.textContent = `R$ ${total.toFixed(2)}`;
}

function adicionarAoCarrinho(nome, preco) {
    carrinho.push({ nome, preco });
    total += preco;
    atualizarCarrinho();

    const carrinhoCount = document.querySelector('.carrinho span');
    carrinhoCount.textContent = `🛒 Carrinho (${carrinho.length})`;
}