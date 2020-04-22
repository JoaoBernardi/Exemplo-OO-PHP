<?php
    include 'class/Conta.php'; // incluido uma nova classe Conta
    include 'class/ContaCorrente.php'; // incluido uma nova classe ContaCorrente
    include 'class/Cliente.php'; // incluido uma nova classe Cliente

    $cc = new ContaCorrente();
    
    echo 'Saldo inicial: R$ ' . $cc->obterSaldo() . '<br>'; // obtem o saldo inicial da conta
    echo 'Limite inicial: R$ ' . $cc->obterLimite() . '<br>'; // obtem o limite inicial da conta

?>
