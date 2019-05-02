<?php
require_once '../../../vendor/autoload.php';

use Behavioral\Observer\ChainOfResponsibilities\HandlerInterface as Handler;
use Behavioral\Observer\ChainOfResponsibilities\AudiHandler as Audi;
use Behavioral\Observer\ChainOfResponsibilities\BmwHandler as Bmw;
use Behavioral\Observer\ChainOfResponsibilities\NissanHandler as Nissan;

function clientCode(Handler $handler) {
	foreach (['240', '280', '300'] as $speed) {
		echo "Who accelerates to {$speed} km/h ? \n";
		$result = $handler->handle($speed);
		if ($result) {
			echo $result . PHP_EOL;
		} else {
			echo 'no one' . PHP_EOL;
		}
	}
}

$audi = new Audi();
$nissan = new Nissan();
$bmw = new Bmw();

$audi->setNext($nissan)->setNext($bmw);

clientCode($audi);