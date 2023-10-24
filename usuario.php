<?php

class Usuario{


    private $email = "";
    private $data_nasc = "";
    private $nome = "";
    private $senha = "";

    public function __construct($Email, $Data_nasc, $Nome, $Senha)
    {
        $this->email = strtoupper($Email);
        $this->data_nasc = $Data_nasc;
        $this->nome = strtoupper($Nome);
        $this->senha = strtoupper($Senha);
    }
    

    public function salvar(){
        $con = new mysqli("localhost","root","","bd_MatchUP");
        $stmt = $con->prepare("insert into cadastroPessoal(nome,email,data_nasc,senha) values (?,?,?,?)");

        $stmt->bind_param("ssss",$this->nome,$this->email,$this->data_nasc,$this->senha);

        $stmt->execute();
        $stmt->close();
        $con->close();
        
        return "Dados gravados com sucesso.";
    }

    public function get_email(){
        return $this->email;
    }

    public function get_data(){
        return $this->data_nasc;
    }

    
    public function get_nome(){
        return $this->nome;
    }

    public function get_senha(){
        return $this->senha;
    }

}


?>