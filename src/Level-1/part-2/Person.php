<?php
class Person {
    private Wallet $wallet;
    private Keys $keys;
    private Smartphone $smartphone;
    private Transport $transport;

    public function __construct(Wallet $wallet, Keys $keys, Smartphone $smartphone, Transport $transport) {
       $this->wallet = $wallet;
       $this->keys = $keys;
       $this->smartphone = $smartphone;
       $this->transport = $transport;
    }
    
}