<?php namespace Basket;

class Basket
{
    private $prod_list = []; // список товаров в корзине

    public function getProdList()
    {
        return $this->prod_list;
    }

    public function getSumm()
    {
        $list = $this->getProdList();
        $summ = 0;
        foreach ($list as $product) {
            $summ += $product->getPrice();
        }
        return $summ;
    }

    // общее количество товраров в корзине
    public function getCount()
    {
        $count = 0;
        $prod_array = $this->getProdList();
        foreach ($prod_array as $key => $product) {
            $count += $product['count'];
        }

        return $count;
    }

    // количество конкретного товрара в корзине
    public function getCountProd($prod)
    {
        $count = 0;
        $prod_array = $this->getProdList();
        foreach ($prod_array as $key => $product) {
            $count += $product['count'];
        }

        return $count;
    }

    // удаление товара из корзины
    public function delProd($id)
    {
        $id = (int)$id;
        $key = array_search($id, $this->getProdList());
        if ($key !== false){
            unset($this->getProdList()[$key]);
        }
    }

    // добавление товара в корзину
    public function addProd($prod, $count)
    {
        $this->prod_list[]['count'] = $count;
        $this->prod_list[key($prod_list)]['name'] = $prod;

        if (in_array($prod, $this->getProdList())) {

        }
        else {
            $this->setProdList($prod, $count);
        }
    }

    // очистить корзину
    public function clearBasket()
    {
        unset($this->prod_list);
        echo 'Корзина пуста<br/>';
    }
}
?>