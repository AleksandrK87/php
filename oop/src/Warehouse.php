<?php

namespace WarehouseApp;

class Warehouse {
    private $location;
    private $products = [];

    public function __construct($location) {
        $this->location = $location;
    }

    public function registerProduct(Product $product) {
        $this->products[$product->getName()] = $product;
    }

    public function removeProduct($productName, $quantity) {
        if (isset($this->products[$productName])) {
            $product = $this->products[$productName];
            $currentQuantity = $product->getQuantity();
            if ($currentQuantity >= $quantity) {
                $product->setQuantity($currentQuantity - $quantity);
                if ($product->getQuantity() == 0) {
                    unset($this->products[$productName]);
                }
            } else {
                throw new \Exception("Недостаточно товара на складе");
            }
        } else {
            throw new \Exception("Товар не найден на складе");
        }
    }

    public function getProducts() {
        return $this->products;
    }

    public function burnAllProducts() {
        $this->products = [];
    }

    public function transferAllProducts(Warehouse $destinationWarehouse) {
        foreach ($this->products as $product) {
            $destinationWarehouse->registerProduct($product);
        }
        $this->burnAllProducts();
    }

   public function getReport() {
      $report = "Отчет по складу в {$this->location}:\n";
      foreach ($this->products as $product) {
         $report .= "Товар: " . $product->getName() . ", Количество: " . $product->getQuantity() . ", Вес: " . $product->getWeight() . " кг\n";
      }
      return $report;
   }
}
