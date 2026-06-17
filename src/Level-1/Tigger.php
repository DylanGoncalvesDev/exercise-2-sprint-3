<?php
class Tigger {
   private static ?Tigger $instance = null;
    private static int $counter = 0;

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
        self::$counter++;
        echo "Grrr!" . PHP_EOL;
   }

   public static function getCounter(): string { 
      return "Numero de Roars: " . self::$counter;
   }
}