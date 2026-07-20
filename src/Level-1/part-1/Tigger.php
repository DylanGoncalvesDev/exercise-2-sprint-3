<?php
class Tigger {
   private static ?Tigger $instance = null;
    private static int $counter = 0;

   private function __construct() {
   }

   public static function getInstance(): Tigger {
      if (self::$instance === null) {
          self::$instance = new Tigger();
      }
      return self::$instance;
   }

   public function roar(): string {
        self::$counter++;
        return "Grrr!" . PHP_EOL;
   }

   public function getCounter(): string { 
      return "Numero de Roars: " . self::$counter;
   }
}