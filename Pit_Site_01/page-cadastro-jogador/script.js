const esporteEscolhido = document.getElementById("esportes");
const posicaoFavoritaEscolhida = document.getElementById("posicao-favorita")

const posicaoPorEsporte = {
    Basquete: ["Armador", "Ala Armador", "Ala", "Ala Pivô", "Pivô"],
    Futsal: ["Goleiro", "Fixo", "Ala Esquerda", "Ala Direita", "Pivô"],
    Futvolei: ["Esquerda", "Direita"],
    Society: ["Goleiro", "Zagueiro", "Meia", "Ala Esquerda", "Ala Direita", "Atacante"],
    Volei: ["Levantador", "Oposto", "Ponteiro", "Central", "Líbero"]
};

esporteEscolhido.addEventListener("change", () => {
    const esporteSelecionado = esporteEscolhido.value
    posicaoFavoritaEscolhida.innerHTML = ""

    if (esporteSelecionado in posicaoPorEsporte) {
        posicaoPorEsporte[esporteSelecionado].forEach((posicao) => {
            const opcao = document.createElement("option");
            opcao.value = posicao;
            opcao.textContent = posicao;
            posicaoFavoritaEscolhida.appendChild(opcao)
        })
    } 
});


