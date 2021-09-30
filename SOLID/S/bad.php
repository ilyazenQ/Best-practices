<?php
/**
 * S - Принцип единственной ответственности
 */
class Product {

   public function setPrice($price) {
      try {
         //save price in db
      } catch (DbException $e) {
         $this->logError($e->getMessage());
      }
   }

   public function logError($error) {
      // save error message
   }

}

   $product = new Product();
   $product->setPrice(10);