<?php namespace Product\tv;
include_once 'loader.php';

class Tv extends \Product\Prod
{
    private $brightness;      // яркость
    private $resolution;      // разрешение экрана
    private $diagonal;
    private $model; // модель

    public function __construct($id, $name, $weight, $brand, $model, $price)
    {
        parent::__construct($id, $name, $weight, $price);
        $this->setBrand($brand);
        $this->model = $model;
        echo 'Создан телевизор '.$this->getBrand().' модель '.$this->getModel().' с ценой '.$this->getPrice().'<br/>';
    }

    public function getBrightness()
    {
        return $this->brightness;
    }

    public function setBrightness($brightness)
    {
        $this->brightness = $brightness;
    }

    public function getResolution()
    {
        return $this->resolution;
    }

    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    }

     public function getDiagonal()
    {
        return $this->diagonal;
    }

    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
    }

    public function getModel()
    {
        return $this->model;
    }

     public function setModel($model)
    {
        $this->model = $model;
    }

    public function __get($name)
    {
        echo "Невозможно получить у класса TV свойство $name";
    }

    public function __set($name, $vak)
    {
        echo "Невозможно уствновить классу TV свойство $name";
    }
}
?>