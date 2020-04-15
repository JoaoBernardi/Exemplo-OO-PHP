<?php
    include 'class/Conta.php';
    include 'class/ContaCorrente.php';
    include 'class/ContaPoupanca.php';
    include 'class/Cliente.php';

    $cc = new ContaCorrente();
    $poupanca = new ContaPoupanca();

    $contas = [$cc, $poupanca];

    echo 'Saldo inicial Conta Corrente: R$' . $contas[0]->obterSaldo() . '<br>';
    echo 'Saldo inicial Poupança: R$ ' . $contas[1]->obterSaldo() . '<br>';

    foreach($contas as $conta)  {
        $conta->depositar(100);
        echo 'Depósito de R$ 100. Valor atual: R$ '. 
            $conta->obterSaldo() . '<br>'; 
    }

?>