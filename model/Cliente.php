<?php

    // Cria a classe de clientes
    class Cliente{
        //atributos

        protected $cpf;
        protected $nome;
        protected $cep;
        protected $numeroCasa;
        protected $telefone;
        protected $email;
        // Define o metodo construtor
        public function __construct($cpf,$nome,$cep,$numeroCasa,$telefone,$email){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->cep = $cep;
            $this->numeroCasa = $numeroCasa;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        //sets e gets das informacoes do cliente
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getCep(){
           return $this->cep;
        }
        public function setCep($cep){
            $this->cep = $cep;
        }
        public function getNumeroCasa(){
            return $this->numeroCasa;
        }
        public function setNumeroCasa($numeroCasa){
            $this->numeroCasa = $numeroCasa;
        }
        public function getTelefone(){
            return $this->telefone;
        }  
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
    }
?>