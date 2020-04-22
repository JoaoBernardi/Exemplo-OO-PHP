<?php

    class Cliente  { 
        private $nome;
        private $cpf;

        function __construct($nome, $cpf)  { 
            $this->nome = $nome; // nome do Cliente
            $this->cpf = $cpf; // número do CPF do Cliente
        }

        function obterNome()  { // obtem-se o nome 
            return $this->nome; // retorna o nome desse
        }

    }

?>
