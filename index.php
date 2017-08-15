<?php
include_once 'loader.php';

$products = [];
$products[] = new \Product\Duck('1','Утка','селезень',200 ,'Камчатский селезень');
$products[] = new \Product\Auto('2','lexus rx',2000, 1000, 'lexus','lexus rx');
$products[] = new \Product\Pen('3','Моя ручка',100, '50','red');
$products[] = new \Product\Tv('4','49" FHD Flat TV UE49M5000AK Series 5','2100', 'samsung', 'UE49M5000AK',500);
echo '<hr>';

$order = new \Basket\Order();
$order->addProd($products[1], 1);
$order->addProd($products[2], 2);
$order->addProd($products[3],3);
$order->addProd($products[0],100);

$order->printOrder();
echo '<hr>';
echo "Итого: {$order->getCol()} шт. на сумму {$order->getSumm()} <br/>";
echo '<hr>';
$order->clearBasket();

?>

