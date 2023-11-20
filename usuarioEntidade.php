<?php
class UsuarioEntidade {
    private $cpf;
    private $nome;
    private $email;
    private $senha;

    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome= $nome;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email= $email;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha= $senha;
    }
}
?>