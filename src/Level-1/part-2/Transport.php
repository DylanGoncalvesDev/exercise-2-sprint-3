<?php
enum TransportType {
   case Car;
   case Bike;
   case PublicTransport;
}

class Transport implements Sound {
    private TransportType $type;

    Public function __construct(TransportType $type) {
        $this->type = $type;
    }

    public function getType(): TransportType {
       return $this->type;
    }

    public function makeSound(): string {
       
       if($this->type === TransportType::Car || $this->type === TransportType::Bike ) {
          return "¡wuup wuup! Vruuuuuuuuuuuuummm!!...";
       }

       return "clac...";
    }
}