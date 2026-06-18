<?php
class Wallet {
  private string $bankCards;
  private string $cash;
  private string $idCard;
  private ?string $transitCard;

  public function __construct(string $bankCards, string $cash, string $idCard, ?string $transitCard) {
    $this->bankCards = $bankCards;
    $this->cash = $cash;
    $this->idCard = $idCard;
    $this->transitCard = $transitCard;
  }

  public function ringTheWallet(): string {
    return "Caching!!...";
  }
}  