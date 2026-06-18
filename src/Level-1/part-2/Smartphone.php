<?php
class Smartphone {
   private string $brand;

   public function __construct(string $brand) {
     $this->brand = $brand;
   }

   public function ringThePhone(): string {
     return "¡tururu tururu!...";
   }
}