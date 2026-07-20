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

    public function leaveHouse() {
      echo "Out of Home!..." . PHP_EOL;
      echo "I have my Keys ?..." . PHP_EOL . $this->keys->makeSound() . PHP_EOL;
      echo "The Wallet ?..." . PHP_EOL . $this->wallet->makeSound() . PHP_EOL;
      echo "The Phone ?..." . PHP_EOL . $this->smartphone->makeSound() . PHP_EOL;
      if ($this->transport->getType() === TransportType::Car) {
          echo "The Car keys ?..." . PHP_EOL . $this->transport->makeSound() . PHP_EOL;
      } elseif ($this->transport->getType() === TransportType::Bike) {
                echo "The Bike keys ?..." . PHP_EOL . $this->transport->makeSound() . PHP_EOL;
      } else {
        echo "The Transit card ?..." . PHP_EOL . $this->transport->makeSound() . PHP_EOL;
      }
    }
    
}