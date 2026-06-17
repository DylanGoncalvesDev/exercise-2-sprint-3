<?php
class Tigger {
   private static ?Tigger $instance = null;

   private function __construct() {
        echo "Building character..." . PHP_EOL;
   }

   public static function getInstance(): Tigger {
      if (self::$instance === null) {
          self::$instance = new Tigger();
      }

      return self::$instance;
   }

   public static function roar() {
        echo "Grrr!" . PHP_EOL;
   }

   
}