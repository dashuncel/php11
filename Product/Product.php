<?php namespace Product;

abstract class AbstractProduct
{
    private $name; // наименование
    private $unit; // единица измерения
    private $dimension; // габариты
    private $brand;  // брэнд
    private $weight; // вес
    private $delivery; // стоимость доставки
    private $discount; // размер скидки
    private $price; // базовая цена
    private $id; // айди товара

    public function __construct($id, $name, $weight, $price)
    {
        $this->name = $name;
        $this->id = $id;
        $this->weight = $weight;
        $this->price = $price;
    }

    // геттеры:
    public function getName()
    {
        return $this->name;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getDimension()
    {
        return $this->dimension;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getPrice()
    {
        if ($this->getDiscount() > 0) {
            $price = $this->price * $this->getDiscount() / 100;
        } else {
            $price = $this->price;
        }
        return $price;
    }

    public function getDelivery()
    {
        if ($this->getPrice() < $this->price) {
            $delivery = 300;
        }
        else
        {
            $delivery = 250;
        }
        return $delivery;
    }

    // сеттеры:
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function setDimension($dimension)
    {
        $this->dimension = $dimension;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}

interface move
{
    public function move($x, $y, $z, $time, $speed); // четырехмерная координата начала движения объекта
    public function stop($x, $y, $z, $time); // остановка объекта в точке пространства и времени
}
