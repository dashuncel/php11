<?php namespace Product\birds;
include_once '..\..\loader.php';

class Duck extends \Product\Prod implements \Product\move
{
    private $sound;  // произносимый звук
    private $poroda; // вид
    private $area;   // территория обитания

    public function __construct($name, $type, $poroda)
    {
        parent::__construct($name, $type);
        $this->poroda = $poroda;
        echo 'Родилась утка '.$this->getName().' породы '.$this->getPoroda();
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    public function getPoroda()
    {
        return $this->poroda;
    }

    public function setPoroda($poroda)
    {
        $this->poroda = $poroda;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function move($x, $y, $z, $time, $speed)
    {
        echo "Объект стартовал в точке ($x, $y, $z) в $time со скоростью движения $speed";
    }

    public function stop($x, $y, $z, $time)
    {
        echo "Объект $this->getName() остановился в точке ($x, $y, $z) в $time";
    }

    public function fly() {
        echo "Утка $this->getName() полетела";
    }

    public function eat($eda) {
        switch ($eda) {
            case 'meat':
                echo "Так не пойдет, вы отравите нашу утку! <br/>";
                break;
            case 'fish':
                echo "О, это любимая еда утки! <br/>";
                break;
            default:
                echo "Спасибо, вкусно! <br/>";
                break;
        }
    }
}
?>