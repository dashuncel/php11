<?php namespace Product\auto;
include_once '..\..\loader.php';

class Auto extends \Product\Prod
{
    private $consumption; // расход топлива
    private $body;        // кузов
    private $power;       // мощность
    private $model;       // мощность

    public function __construct($name, $weight, $brand, $model)
    {
        parent::__construct($name, $weight);
        $this->setBrand($brand);
        $this->model = $model;
    }

    public function turnTo($side) {
        echo 'Автомобиль '.$this->getName()." повернул $side<br/>";
    }

    public function stop($x, $y, $z, $time)
    {
        echo 'Автомобиль '.$this->getName()." остановился в точке ($x $y $z) в $time<br/>";
    }

    public function move($x, $y, $z, $time, $speed)
    {
        echo 'Автомобиль '.$this->getName()." поехал из точки ($x $y $z) в $time<br/>";
    }

    public function __get($name)
    {
        echo "Невозможно получить у класса авто свойство $name";
    }

    public function __set($name, $vak)
    {
        echo "Невозможно уствновить классу Авто свойство $name";
    }
}
?>