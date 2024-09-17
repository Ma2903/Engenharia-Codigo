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
     * @param string $numeroCasa Número da casa do clie
