<?php
include_once 'loader.php';

$products = [];
$products[] = new \Product\Duck('1','Утка','селезень',200 ,'Камчатский селезень');
$products[] = new \Product\Auto('2','lexus rx',2000, 1000, 'lexus','lexus rx');
$products[] = new \Product\Pen('3','Моя ручка',100, '50','red');
$products[] = new \Product\Tv('4','49" FHD Flat TV UE49M5000AK Series 5','2100', 'samsung', 'UE49M5000AK',500);
echo '<hr>';

$basket = new \Basket\Basket();
$basket->addProduct($products[1], 1);
$basket->addProduct($products[2], 2);
$basket->addProduct($products[3],3);
$basket->addProduct($products[0],100);
$basket->addProduct($products[0],12);

echo '<hr>';
$basket->getAmount();
$basket->getCountProd($products[0]);
$basket->getCount();
$basket->delProduct($products[1]);

echo '<hr>';
$order = new \Basket\Order($basket);
$order->printOrder();


