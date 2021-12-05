<?php
/**
 * I - Принцип разделения интерфейса
 */

interface ICarTransformer {
   public function toCar();
}
interface IPlaneTransformer {
   public function toPlane();
}
interface IShipTransformer {
   public function toShip();
}

class SuperTransformer implements ICarTransformer, IPlaneTransformer, IShipTransformer {

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

class CarTransformer implements ICarTransformer {

   public function toCar() {
      echo "transform to car";
   }
   
}