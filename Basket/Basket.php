<?php namespace Basket;
class Basket
{
    private $prod_list=[]; // список товаров

    public function getProdList()
    {
        return $this->prod_list;
    }

    public function setProdList($prod_list)
    {
        $this->prod_list = $prod_list;
    }

    public function getSumm()
    {
        return $this->summ;
    }

    public function setSumm($summ)
    {
        $this->summ = $summ;
    }

    // количество товраров в корзие
    public function getCol()
    {
        return count($this->prod_list);
    }

    // удаление товара из корзины
    public function delProd($prod)
    {

    }

}
?>