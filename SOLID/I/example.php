<?php
/**
 * I - Принцип разделения интерфейса
 */
interface ISuperTransformer {
   public function toCar();
   public function toPlane();
   public function toShip();
}

class SuperTransformer implements ISuperTransformer {

   public function toCar() {
      echo "transform to car";
   }

   public function toPlane() {
      echo "transform to plane";
   }

   public function toShip() {
      echo "transform to ship";
   }

}

class CarTransformer implements ISuperTransformer {

   public function toCar() {
      echo "transform to car";
   }

   public function toPlane() {
      throw new Exception('cant transform to plane');
   }

   public function toShip() {
      throw new Exception('cant transform to ship');
   }
}