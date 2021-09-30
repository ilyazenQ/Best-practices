<?php
/**
 * S - Принцип единственной ответственности
 */
class Product {

   private $logger;

   public function __construct(Logger $logger) {
      $this->logger = $logger;
   }

   public function setPrice($price) {
      try {
         //save price in db
      } catch (DbException $e) {
         $this->logger->log($e->getMessage());
      }
   }

}
class Logger {
   public function log($message) {
      $this->saveToFile($message);
   }
}

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);