<?php 

require_once  'Conta.php';

$primeiraConta = new Conta;
$primeiraConta-> depositar(1000);
$primeiraConta-> sacar(300);

echo $primeiraConta->saldoValor();
