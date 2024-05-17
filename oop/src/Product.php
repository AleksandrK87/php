<?php

namespace WarehouseApp;

class Product {
   private $name;
   private $weight;
   private $quantity;

      public function __construct($name, $weight, $quantity) {
      if ($weight > 20) {
         throw new \Exception("Вес товара не должен превышать 20 кг");
      }
      $this->name = $name;
      $this->weight = $weight;
      $this->quantity = $quantity;
   }

   public function getName() {
      return $this->name;
   }
   public function getWeight() {      
      return $this->weight;   }

   public function getQuantity() {
      return $this->quantity;
   }
      public function setQuantity($quantity) {
      $this->quantity = $quantity;
   }
}
