<?php
    include 'class/Conta.php';

    $objetoConta = new Conta(); // Instanciação da classe Conta
    
    $saldo = $objetoConta->obterSaldo();

    echo 'Saldo da conta é R$ '. $saldo . '<br>';

    echo 'Depósito de R$ 100' . '<br>';
    $objetoConta->depositar(100);

    $saldo = $objetoConta->obterSaldo();
    echo 'Novo saldo da conta é de R$ ' . $saldo . '<br>';
?>