<?php

class User {
  public $nome;
  public $cognome;
  public $eta;
  public $stelle;
  public $follower;



  public function __construct($_nome, $_cognome, $_follower) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->follower = $_follower;
  }



  public function setEta($_eta){
    if($_eta < 18 || $_eta > 40 || !is_numeric($_eta)){
      throw new Exception('Età errata');
    } else {
      $this->eta = $_eta;
    }
  }

  public function getEta(){
    return $this->eta;
  }
}



$user_1 = new User ('Gianni', 'Pozzi', 370);

$user_1-> eta = 22;
$user_1-> stelle = 2;


$user_2 = new User ('Pedros', 'Lollitos', 3250);

$user_2-> eta = 33;
$user_2-> stelle = 9;


$user_3 = new User ('Jack', 'Sparrow', 8732);

$user_3-> eta = 43;
$user_3-> stelle = 10;