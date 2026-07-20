<?php
class Smartphone  implements Sound {
   private string $brand;

   public function __construct(string $brand) {
     $this->brand = $brand;
   }

   public function makeSound(): string {
     return "¡tururu tururu!...";
   }
}