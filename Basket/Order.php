<?php namespace Basket;

class Order
{
    private $address;
    private $oreder_list = [];

    public function __call($name, $arguments)
    {
        echo "Метод $name с параметрами " . var_dump($arguments) . " не доступен для данного класса!";
    }

    public function printOrder()
    {
        echo 'В корзине находится:<br/>';
        $list = $this->getProdList();
        foreach ($list as $prod) {
            echo 'Товар '.$prod->getName().', цена '.$prod->getPrice().'<br/>';
        }
    }

    public function setOrder()
    {

    }
}
?>