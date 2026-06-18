<?php
enum TransportType {
   case Car;
   case Bike;
   case PublicTransport;
}

class Transport {
    private TransportType $type;

    Public function __construct(TransportType $type) {
        $this->type = $type;
    }

    public function sound(): string {
       
       if($this->type === TransportType::Car || $this->type === TransportType::Bike ) {
          return "¡wuup wuup! Vruuuuuuuuuuuuummm!!...";
       }

       return "clac...";
    }
}