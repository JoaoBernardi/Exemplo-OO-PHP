<?php

    class ContaCorrente extends Conta { // ContaCorrente é uma filha de Conta, digamos assim
        private $limite;

        function __construct()    {
            parent::__construct();
            $this->limite = 500; // esse é o limite da conta
        }

        function obterLimite()  { // obtem o Limite da conta
            return $this->limite; // retorna o limite da conta
        }

    }

?>
