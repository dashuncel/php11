<?php namespace Product\tv;
include_once '..\..\loader.php';

class Tv extends \Product\Prod
{
    private $brightness;      // яркость
    private $resolution;      // разрешение экрана
    private $diagonal;
    private $model; // модель

    public function __construct($name, $weight, $brand, $model)
    {
        parent::__construct($name, $weight);
        $this->setBrand($brand);
        $this->model = $model;
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