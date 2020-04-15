<?php

    class Cliente  {
        private $nome;
        private $cpf;

        function __construct($nome, $cpf)  {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        function obterNome()  {
            return $this->nome;
        }

    }

?>