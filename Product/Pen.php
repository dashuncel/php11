<?php namespace Product;

class Pen extends \Product\AbstractProduct implements \Product\move
{
    private $color; // цвет стержня

    public function __construct($id, $name, $weight, $price, $color)
    {
        parent::__construct($id, $name, $weight, $price);
        $this->color= $color;
        echo "Создана ручка цветом {$this->getColor()} с ценой {$this->getPrice()} <br/>";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function stop($x, $y, $z, $time)
    {
        // переопределение функции интерфейса
    }

    public function move($x, $y, $z, $time, $speed)
    {
        // переопределение функции интерфейса
    }

    public function __get($name)
    {
        echo "Невозможно получить у класса ручка свойство $name";
    }

    public function __set($name, $vak)
    {
        echo "Невозможно уствновить классу ручка свойство $name";
    }
}
?>