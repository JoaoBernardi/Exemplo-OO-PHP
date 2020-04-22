<?php
    include 'class/Conta.php';
    include 'class/Cliente.php';

    $conta = new Conta(); // criada uma nova conta
    $cliente = new Cliente('Rafael', '0000000000'); // criado um novo cliente Rafael

    // Composição
    $conta->definirTitular($cliente); // define-se o titular

    $saldo = $conta->obterSaldo(); // mostra pra aparecer o Saldo
    echo 'Saldo da conta é R$ '. $saldo . '<br>'; // saldo da conta estimulado

    $nomeTitular = $conta->obterTitular()->obterNome(); // mostra o nome do titular
    echo 'Nome do Titular: '. $nomeTitular . '<br>';

?>
