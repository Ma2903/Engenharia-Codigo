<?php

/**
 * Representa um cliente com informações pessoais.
 *
 * Esta classe é usada para armazenar e manipular as informações de um cliente, incluindo CPF,
 * nome, CEP, número da casa, telefone e email. Inclui métodos para obter e definir essas informações.
 *
 * @package MeuPacote
 * @author Daniel
 */
class Cliente {
    /**
     * CPF do cliente.
     *
     * @var string
     */
    protected $cpf;

    /**
     * Nome do cliente.
     *
     * @var string
     */
    protected $nome;

    /**
     * CEP do cliente.
     *
     * @var string
     */
    protected $cep;

    /**
     * Número da casa do cliente.
     *
     * @var string
     */
    protected $numeroCasa;

    /**
     * Telefone do cliente.
     *
     * @var string
     */
    protected $telefone;

    /**
     * Email do cliente.
     *
     * @var string
     */
    protected $email;

    /**
     * Construtor da classe Cliente.
     *
     * Inicializa um novo cliente com as informações fornecidas.
     *
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $cep CEP do cliente.
     * @param string $numeroCasa Número da casa do cliente.
    */
    public function __construct($cpf,$nome,$cep,$numeroCasa,$telefone,$email){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->cep = $cep;
        $this->numeroCasa = $numeroCasa;
        $this->telefone = $telefone;
        $this->email = $email;
    }
    /**
     * Sets e Gets da classe Cliente.
     *
     * Inicializa um novo cliente com as informações fornecidas.
     *
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $cep CEP do cliente.
     * @param string $numeroCasa Número da casa do cliente.
     * @param string $telefone Telefone do cliente.
     * @param string $email E-mail do cliente.
    */
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