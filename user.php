<?php

class User {
  public $nome;
  public $cognome;
  public $eta;
  public $stelle;
  public $follower = 0;
  

  public function __construct($_nome, $_cognome, $_follower) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->follower = $_follower;
  }


}