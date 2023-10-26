document.getElementById("btn-criar").addEventListener("click", function() {
    const lblNome = document.getElementById("nome").value;
    const lblEndereco = document.getElementById("endereco").value;
    const lblHorarioAbertura = document.getElementById("horario1").value;
    const lblHorarioEncerramento = document.getElementById("horario2").value;
    const lblEsporte = document.getElementById("esportes").value;
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const peloMenosUmSelecionado = Array.from(checkboxes).some((checkbox) => checkbox.checked);

    if (lblNome !== "") {
        if (lblEndereco !== "") {
            if (lblHorarioAbertura !== "") {
                if (lblHorarioEncerramento !== "") {
                    if (lblEsporte !== "") {
                        if (peloMenosUmSelecionado) {
                            window.location.href = ("../page-tela-inicial/index.html")
                        } else {
                            alert("Selecione pelo menos um dia de funcionamento")
                        }
                    } else {
                        alert("Selecione um esporte")
                    }
                } else {
                    alert("Digite um horário de encerramento")
                }
            } else {
                alert("Digite um horário de abertura")
            }
        } else {
            alert("Digite o endereço da quadra")
        }
    } else {
        alert("Digite o nome da quadra")
    }
})