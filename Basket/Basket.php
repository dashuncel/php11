<?php namespace Basket;

class Basket
{
    private $prod_list = []; // список товаров в корзине
    const COUNT_KEY  = 'count';
    const NAME_KEY = 'name';

    public function __call($name, $arguments)
    {
        echo "Метод $name с параметрами " . var_dump($arguments) . " не доступен для данного класса!";
    }

    public function getProdList()
    {
        return $this->prod_list;
    }

    // общая сумма корзины:
    public function getAmount()
    {
        $amount = 0;
        foreach ($this->prod_list as $key => $prod_) {
            $amount += ($prod_[self::COUNT_KEY] *(float)$prod_[self::NAME_KEY]->getPrice());
        }
        echo "Общая сумма товаров в корзине: $amount<br/>";
        return $amount;
    }

    // общее количество товраров в корзине
    public function getCount()
    {
        $count = 0;
        foreach ($this->prod_list as $key => $prod_) {
            $count += $prod_[self::COUNT_KEY];
        }
        echo "Общее количество товаров в корзине: $count<br/>";
        return $count;
    }

    // количество конкретного товрара в корзине
    public function getCountProd($product)
    {
        foreach ($this->prod_list as $key => $prod_) {
            if ($prod_ == $product) {
                echo "В корзине находится {$prod_[self::COUNT_KEY]} товаров {$prod_[self::NAME_KEY]->getName()} <br/>";
                return $prod_[self::COUNT_KEY];
            }
        }
    }

    // удаление товара из корзины
    public function delProduct($product)
    {
        $flag = false;

        foreach ($this->prod_list as $key => $prod_) {
            if ($prod_[self::NAME_KEY] == $product) {
                unset($this->prod_list[$key]);
                echo "Товар {$product->getName()} успешно удален из корзины<br/>";
                break;
            }
        }
    }

    // добавление товара в корзину
    public function addProduct($product, $count)
    {
        $flag = false;

        foreach ($this->prod_list as $key => $prod_) {
            if ($this->prod_list[$key][self::NAME_KEY] == $product) {
                $this->prod_list[$key][self::COUNT_KEY] = $count;
                echo "Товар {$product->getName()} уже есть в корзине, изменяю количество, теперь $count<br />";
                $flag = true;
                break;
            }
        }

        if (!$flag) {
            $this->prod_list[] = [self::NAME_KEY => $product, self::COUNT_KEY => $count];
            echo "В корзину добавлен товар {$product->getName()} в количестве $count <br/>";
        }
    }

    // очистить корзину
    public function clearBasket()
    {
        $this->prod_list = [];
        var_dump($this->prod_list);
        echo "Корзина пуста<br/>";
    }
}
?>