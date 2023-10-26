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

document.getElementById("btn-criar").addEventListener("click", function() {
    const lblEsportes = document.getElementById("esportes").value;
    const lblPosicao = document.getElementById("posicao-favorita").value;
    const lblAltura = document.getElementById("altura").value;
    const lblDescricao = document.getElementById("descricao").value;

    if (lblEsportes !== "") {
        if (lblPosicao !== "") {
                if (lblAltura >= 1.2 && lblAltura <= 2.5) {
                    if (lblDescricao !== "") {
                        window.location.href = "../page-tela-inicial/index.html"
                    } else {
                        alert("Adicione uma descrição do seu estilo de jogo")
                    }
                } else {
                    alert("Digite um altura válida")
                }
        } else {
            alert("Selecione uma posição")
        }
    } else {
        alert("Selecione um esporte")
    }
})


