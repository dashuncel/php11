<?php namespace Basket;

class Order extends Basket
{
    private $address;

    public function printOrder()
    {
        $list=$this->getProdList();
        foreach ($list as $prod) {
            echo '';
        }

    }
}
?>