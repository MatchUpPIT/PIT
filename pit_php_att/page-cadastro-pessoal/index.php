<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatchUp</title>
    <link rel="icon" type="image/svg+xml" href="icon.ico" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form> 
        <div class="main-cadastro-pessoal">
            <div class="card-cadastro-pessoal">
                <h1>CADASTRO</h1>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite seu nome" id="nome">
                </div>
                <div class="textfield">
                    <label for="aplido">Apelido</label>
                    <input type="text" name="apelido" placeholder="Digite seu apelido" id="apelido">
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="Digite seu email" id="email">
                </div>
                <div class="textfield">
                    <label for="dataNasc">Data de Nascimento</label>
                    <input type="date" name="dataNasc" placeholder="Digite sua data de nascimento" id="data">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" id="senha">
                </div>
                <div class="textfield">
                    <label for="confirmarSenha">Confirmar Senha</label>
                    <input type="password" name="confirmarSenha" placeholder="Digite sua senha novamente" id="confirmarSenha">
                </div>
                <div class="buttons-cadastro">
                <button class="btn-cadastro-jogador" id="btn-cadastro-jogador">Cadastrar Jogador</button>
                <button class="btn-cadastro-quadra" id="btn-cadastro-quadra">Cadastrar Quadra</button>
                </div>
            </div>
        </div>
</form>
</body>
<script src="script.js"></script>
</html>
