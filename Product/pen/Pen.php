<?php namespace Product\pen;
include_once '..\..\loader.php';

class Pen extends \Product\Prod implements \Product\move
{
    private $color; // цвет стержня

    public function __construct($name, $weight, $color)
    {
        parent::__construct($name, $weight);
        $this->color= $color;
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