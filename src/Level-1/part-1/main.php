<?php
require_once "Tigger.php";

$tigger = Tigger::getInstance();

echo $tigger->getCounter() . PHP_EOL;

echo PHP_EOL . $tigger->roar() . PHP_EOL;
echo $tigger->roar() . PHP_EOL;

echo $tigger->getCounter();