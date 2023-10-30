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
        <div class="main-cadastro-jogador">
            <div class="card-cadastro-jogador">
                <h1>CADASTRO JOGADOR</h1>
                <div class="textfield">
                    <label for="esportes">Esporte</label>
                    <select id="esportes" name="esportes" placeholder="Selecione seu esporte">
                        <option value="">Escolha o esporte</option>
                        <option value="Basquete">Basquete</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Futvolei">Futvolei</option>
                        <option value="Society">Society</option>
                        <option value="Volei">Volei</option>
                    </select>
                </div>
                <div class="textfield">
                    <label for="posicao-favorita">Posição Favorita</label>
                    <select id="posicao-favorita" name="posicao-favorita" placeholder="Selecione sua posição">
                        <option value="">Escolha a posição, após selecionar o esporte</option>
                    </select>
                </div>
                <div class="textfield">
                    <label for="altura">Altura</label>
                    <input type="number" id="altura" step="0.01" name="altura" max="2.50" min="1.20" placeholder="Digite sua altura (em m, mínimo: 1,20 - máximo: 2,50)">
                </div>
                <div class="textfield">
                    <label for="estilo-jogo">Estilo de Jogo</label>
                    <textarea type="text" id="descricao" rows="3" name="estilo-jogo" placeholder="Descreva seu estilo de jogo"></textarea>
                </div>
                <div class="btn">
                    <button class="btn-criar" id="btn-criar">Criar</button>
                </div>            
                </div>
            </div>
        </div>
    </form>
<script src="script.js"></script>

</body>
</html>