<?php
include_once 'loader.php';

$products[]=new \Product\birds\Duck('1','Утка','селезень','Камчатский селезень',200);
$products[]=new \Product\auto\Auto('2','lexus rx',2000, 'Lexus', 'lexus rx',1000);
$products[]=new \Product\pen\Pen('3','Моя ручка',100, 'red',50);
$products[]=new \Product\tv\Tv('4','49" FHD Flat TV UE49M5000AK Series 5','2100', 'samsung', 'UE49M5000AK',500);
echo '<hr>';

$order=new \Basket\Order();
$order->addProd($products[1]);
$order->addProd($products[2]);
$order->addProd($products[3]);
$order->addProd($products[0]);

$order->printOrder();
echo '<hr>';
echo 'Итого: '.$order->getCol().'шт. на сумму '.$order->getSumm().'<br/>';
echo '<hr>';
$order->clearBasket();

?>

