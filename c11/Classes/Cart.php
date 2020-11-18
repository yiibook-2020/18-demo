<?php
class Cart{
    private $goodsLists = [];

    public function __construct(){
        session_start();
        $this->getGoodsListsBySession();
    }

    private function getGoodsListsBySession() {
        if (isset($_SESSION['goods_lists'])) {
            $this->goodsLists = $_SESSION['goods_lists'];
        }
    }

    public function add($goods_id, $num = 1) {
        if ($num <= 0) return false;
        if (isset($this->goodsLists[$goods_id])) {
            $this->goodsLists[$goods_id]['number'] += $num;
        } else {
            $this->goodsLists[$goods_id]['number'] = $num;
        }

        $this->saveToSession();
    }

    private function saveToSession() {
        $_SESSION['goods_lists'] = $this->goodsLists;
    }

    public function getGoodsLists() {
        return $this->goodsLists;
    }

    public function delete($goods_id, $isCompleteDel = false, $num = 1) {
        if (!isset($this->goodsLists[$goods_id])) return false;

        if ($isCompleteDel) {
            unset($this->goodsLists[$goods_id]);
        } else {
            $this->goodsLists[$goods_id]['number'] -= $num;

            if ($this->goodsLists[$goods_id]['number'] <= 0) unset($this->goodsLists[$goods_id]);
        }
        $this->saveToSession();
    }

    public function clear() {

    }
}


$cart = new Cart();

$cart->delete(2, true);

var_dump($cart->getGoodsLists());