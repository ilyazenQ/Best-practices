<?php
/**
 * L - Принцип подстановки Барбары Лисков
 */
class Bird {
   public function fly() {
      $flySpeed = 100;
      return $flySpeed;
   }
}

class BirdRun{
   private $bird;

   public function __construct(Bird $bird)
   {
      $this->bird = $bird;
   }
   public function run() {
      $flySpeed = $this->bird->fly();
   }
}
$bird = new Bird();
$birdRun = new BirdRun($bird);
$birdRun->run();