<?php
require_once "Sound.php";
require_once "Wallet.php";
require_once "Keys.php";
require_once "Smartphone.php";
require_once "Transport.php";
require_once "Person.php";

$wallet = new Wallet("Mastercard-Visa", "50€","Y200456879f" ,"T-Mobilitat");
$keys = new Keys();
$Smartphone  = new Smartphone("Samsung");
$transport = new Transport(TransportType::Car);
$person = new Person ($wallet, $keys, $Smartphone, $transport);

$person->leaveHouse();
 