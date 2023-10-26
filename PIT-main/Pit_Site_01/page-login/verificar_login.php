    <?php

    //require_once("usuario.php");

    class Login{
        private $email = "";
        private $senha = "";

        public function __construct($Email, $Senha){
            $this->email = strtoupper($Email);
            $this->senha = strtoupper($Senha);
        }

        public function fazerLogin(){
            $con = new mysqli("localhost", "root", "", "bd_MatchUP");
            $stmt = $con->prepare("SELECT * FROM cadastroPessoal WHERE email = ? AND senha = ?");
            $stmt->bind_param("ss", $this->email, $this->senha);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >= 1) {
                $stmt->close();
                $con->close();
                return true;
            } else {
                $stmt->close();
                $con->close();
                return false;
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $login = new Login($email, $senha);
        $mensagem = $login->fazerLogin();

        if ($mensagem) {
            echo "Login feito com sucesso";
            // Criar sessão e armazenar os dados do usuários
            // Referência: https://www.w3schools.com/php/php_sessions.asp
            //             https://www.w3schools.blog/php-program-to-create-login-and-logout-using-sessions
            header("Location: ../page-tela-inicial/index.html"); // mudar para php e validar a sessão na página
        } else {
            echo "Usuário não encontrado!";
        }
        
    }
    ?>
