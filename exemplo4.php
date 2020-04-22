<?php
    include 'class/Conta.php'; // incluido uma nova classe Conta
    include 'class/ContaCorrente.php'; // incluido uma nova classe ContaCorrente
    include 'class/ContaPoupanca.php'; // incluido uma nova classe ContaPoupanca
    include 'class/Cliente.php'; // incluido uma nova classe Cliente

    $cc = new ContaCorrente(); // nova ContaCorrente
    $poupanca = new ContaPoupanca(); // nova ContaPoupanca

    $contas = [$cc, $poupanca];

    echo 'Saldo inicial Conta Corrente: R$' . $contas[0]->obterSaldo() . '<br>'; // saldo do valor inicial da Conta Corrente R$
    echo 'Saldo inicial Poupança: R$ ' . $contas[1]->obterSaldo() . '<br>'; // saldo do valor inicial da Poupança R$

    foreach($contas as $conta)  { 
        $conta->depositar(100); // deposita-se R$100
        echo 'Depósito de R$ 100. Valor atual: R$ '. // conclui o valor de R$100
            $conta->obterSaldo() . '<br>'; // obtem-se o saldo da conta
    }

?>
