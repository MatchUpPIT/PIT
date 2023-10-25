document.getElementById("btn-cadastro-jogador").addEventListener("click", function() {
    const lblNome = document.getElementById("nome").value;
    const lblEmail = document.getElementById("email").value;
    const lblDataNasc = document.getElementById("data").value;
    const lblSenha = document.getElementById("senha").value;
    const lblConfirmarSenha = document.getElementById("confirmarSenha").value
    const condicaoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    
    if (lblNome !== "") {
        if (condicaoEmail.test(lblEmail)) {
            if (lblDataNasc) {  
                if (lblSenha !== "") {
                    if (lblConfirmarSenha === lblSenha) {
                        window.location.href = ("../page-cadastro-jogador/index.html")
                    } else {
                        alert("As senhas não são compatíveis");
                    }
                } else {
                    alert("Digite uma senha");  
                }
            } else {
                alert("Digite sua data de nascimento");
            }    
        } else {
            alert("Digite um email válido");
        }
    } else {
        alert("Digite seu nome");
    }
});


document.getElementById("btn-cadastro-quadra").addEventListener("click", function() {
    const lblNome = document.getElementById("nome").value;
    const lblEmail = document.getElementById("email").value;
    const lblSenha = document.getElementById("senha").value;
    const lblConfirmarSenha = document.getElementById("confirmarSenha").value;

    if (lblNome !== "") {
        if (lblEmail !== "") {
            if (lblSenha !== "") {
                if (lblConfirmarSenha === lblSenha) {
                    window.location.href = "../page-cadastro-quadra/index.html";
                } else {
                    alert("As senhas não são compatíveis");
                }
            } else {
                alert("Digite uma senha");
            }
        } else {
            alert("Digite seu email");
        }
    } else {
        alert("Digite seu nome");
    }
});