<?php

    class ContaCorrente extends Conta {
        private $limite;

        function __construct()    {
            parent::__construct();
            $this->limite = 500;
        }

        function obterLimite()  {
            return $this->limite;
        }

    }

?>