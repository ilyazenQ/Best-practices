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
/**
 * Дочерний класс
 * Не изменяет поведение, но дополняет
 * Не нарушает LSP
 */
class Duck extends Bird {
   public function fly() {
      $flySpeed = 8;
      return $flySpeed;
   }
   public function swim() {
      $swimSpeed = 2;
      return $swimSpeed;
   }
}
/**
 * Дочерний класс
 * Изменяет поведение
 * Нарушает LSP
 */
class Penguin extends Bird {
   public function fly() {
     
      return 'cant fly'; // нарушает поведение родительского метода
   }
   public function swim() {
      $swimSpeed = 4;
      return $swimSpeed;
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

$bird = new Duck();
$birdRun = new BirdRun($bird);
$birdRun->run();

$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();