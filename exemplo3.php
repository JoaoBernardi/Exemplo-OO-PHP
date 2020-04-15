<?php
    include 'class/Conta.php';
    include 'class/ContaCorrente.php';
    include 'class/Cliente.php';

    $cc = new ContaCorrente();
    
    echo 'Saldo inicial: R$ ' . $cc->obterSaldo() . '<br>';
    echo 'Limite inicial: R$ ' . $cc->obterLimite() . '<br>';

?>