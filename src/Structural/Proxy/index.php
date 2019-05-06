<?php

require_once '../../../vendor/autoload.php';

use Structural\Proxy\BankAccountProxy;

$bankAccount = new BankAccountProxy();

$bankAccount->deposit(30);

var_dump($bankAccount->getBalance());

$bankAccount->deposit(50);

var_dump($bankAccount->getBalance());

