<?php
    include 'class/Conta.php';
    include 'class/Cliente.php';

    $conta = new Conta();
    $cliente = new Cliente('Rafael', '0000000000');

    // Composição
    $conta->definirTitular($cliente);

    $saldo = $conta->obterSaldo();
    echo 'Saldo da conta é R$ '. $saldo . '<br>';

    $nomeTitular = $conta->obterTitular()->obterNome();
    echo 'Nome do Titular: '. $nomeTitular . '<br>';

?>