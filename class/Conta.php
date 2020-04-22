<?php

    class Conta {
        private $saldo;
        private $titular;

        function __construct()  {
            $this->saldo = 0;
        }

        function obterSaldo()   { // obtem o valor do saldo da conta
            return $this->saldo; // retorna o valor do saldo da conta
        }

        function depositar($valor)    { // deposita o valor atribuido
            $this->saldo += $valor; // da-se o valor do saldo
        }

        function definirTitular($titular)   { // define o titular
            $this->titular = $titular; // nome do titular
        }

        function obterTitular() { 
            return $this->titular; //  retorna o nome do Titular
        }

    }

?>
