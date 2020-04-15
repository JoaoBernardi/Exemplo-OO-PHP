<?php

    class Conta {
        private $saldo;
        private $titular;

        function __construct()  {
            $this->saldo = 0;
        }

        function obterSaldo()   {
            return $this->saldo;
        }

        function depositar($valor)    {
            $this->saldo += $valor;
        }

        function definirTitular($titular)   {
            $this->titular = $titular;
        }

        function obterTitular() {
            return $this->titular;
        }

    }

?>