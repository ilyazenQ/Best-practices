<?php
/**
 * O - принцип открытости / закрытости
 */
interface ILogger {
   public function log($message);

}
class Product {

   private $logger;

   public function __construct(ILogger $logger) {
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

class FileLogger  implements ILogger{
   private function saveToFile($message){

   }

   public function log($message) {
      $this->saveToFile($message);
   }
}
class DbLogger implements ILogger{
   private function saveToDb($message){

   }

   public function log($message) {
      $this->saveToDb($message);
   }
}

$logger = new DbLogger();
$product = new Product($logger);
$product->setPrice(10);