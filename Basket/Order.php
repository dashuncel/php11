<?php namespace Basket;

require_once 'Order.php';

class Order
{
    private $address;
    private $prod_list = [];

    public function __call($name, $arguments)
    {
        echo "Метод $name с параметрами " . var_dump($arguments) . " не доступен для данного класса!";
    }

    public function __construct ($basket) {
        $this->prod_list = $basket->getProdList();
    }

    public function getProdList()
    {
        return $this->prod_list;
    }

    public function printOrder()
    {
        echo '<br/>Вы заказали:<br/>';
        foreach ($this->getProdList() as $prod) {
            echo "Товар  {$prod[Basket::NAME_KEY]->getName()},  цена {$prod[Basket::NAME_KEY]->getPrice()} в количестве {$prod[Basket::COUNT_KEY]} <br/>";
        }
    }
}
?>