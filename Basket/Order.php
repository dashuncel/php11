<?php namespace Basket;

class Order extends Basket
{
    private $address;

    public function printOrder()
    {
        echo 'В корзине находится:<br/>';
        $list=$this->getProdList();
        foreach ($list as $prod) {
            echo 'Товар '.$prod->getName().', цена '.$prod->getPrice().'<br/>';
        }
    }
}
?>