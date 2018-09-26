<?php

interface ICartMethod
{
    public function execute();
}
/*
 * 這邊假設CartMethod 是購物車中負責整理已購買商品，並回傳商品內容陣列
 */
class CartMethod implements ICartMethod
{
    public function execute()
    {
        return [
            'item01' => [
                'price' => 1000,
                'mark' => 1,
            ],
            'item02' => [
                'price' => 1250,
                'mark' => 0,
            ],
            'item03' => [
                'price' => 2000,
                'mark' => 1
            ],
        ];
    }
}