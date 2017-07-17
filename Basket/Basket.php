<?php namespace Basket;

class Basket
{
    private $prod_list=[]; // список товаров в массиве

    public function getProdList()
    {
        return $this->prod_list;
    }

    public function setProdList($prod)
    {
        $this->prod_list[] = $prod;
    }

    public function getSumm()
    {
        $list = $this->getProdList();
        $summ = 0;
        foreach ($list as $prodobj) {

        }
    }

    // количество товраров в корзие
    public function getCol()
    {
        return count($this->getProdList());
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
    public function addProd($prod)
    {
        if (! in_array($prod, $this->getProdList())) {
            $this->setProdList($prod);
        }
    }

    // очистить корзину
    public function clearBasket()
    {
        unset($this->prod_list);
    }
}
?>