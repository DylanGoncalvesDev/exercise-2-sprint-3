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
}