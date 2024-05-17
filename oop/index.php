<?php

require 'vendor/autoload.php';

use WarehouseApp\Product;
use WarehouseApp\Warehouse;

try {
    // Создаем склад в Киеве
   $kyivWarehouse = new Warehouse("Киев");

    // Регистрация товаров
   $product1 = new Product("Телевизор", 15, 10);
   $product2 = new Product("Стиральная машина", 19, 5);
   $kyivWarehouse->registerProduct($product1);
   $kyivWarehouse->registerProduct($product2);

   // Печать отчета
   echo $kyivWarehouse->getReport();

   // Списание товара
   $kyivWarehouse->removeProduct("Телевизор", 3);

   // Печать отчета после списания
   echo $kyivWarehouse->getReport();

   // Создаем склад в Жмеренке
   $zhmerynkaWarehouse = new Warehouse("Жмеренка");

   // Перенос всех товаров из Киева в Жмеренку
   $kyivWarehouse->transferAllProducts($zhmerynkaWarehouse);

   // Печать отчетов по обоим складам
   echo $kyivWarehouse->getReport();
   echo $zhmerynkaWarehouse->getReport();

   // Сжигание всех товаров на складе в Жмеренке
   $zhmerynkaWarehouse->burnAllProducts();

   // Печать отчета после сжигания
   echo $zhmerynkaWarehouse->getReport();
} catch (Exception $e) {
   echo "Ошибка: " . $e->getMessage();
}
?>