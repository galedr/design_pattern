<?php

abstract class ICalculateDecorator implements ICartMethod
{
    protected $cart;

    public function __construct(ICartMethod $cartMethod)
    {
        $this->cart = $cartMethod;
    }

    abstract public function execute();
}
/*
 * 折扣方法，判斷商品是否達到折價門檻，並回傳處理後結果
 */
class MarkDiscount extends ICalculateDecorator
{
    /**
     * @return bool : 如果特價標['mark'] 為1， 該商品打59折
     */
    public function execute()
    {
        if (empty($this->cart->execute())) {
            return false;
        }
        $data = $this->cart->execute();
        foreach ($data as $k => $v) {
            if ($v['mark']) {
                $data[$k]['price'] = round($v['price'] * 0.59, 0);
            }
        }
        return $data;
    }
}

class HolidayDiscount extends ICalculateDecorator
{
    /**
     * @return bool ： 特殊節日回饋，所有商品8折
     */
    public function execute()
    {
        if (empty($this->cart->execute())) {
            return false;
        }
        $data = $this->cart->execute();
        foreach ($data as $k => $v) {
            $data[$k]['price'] = round($v['price'] * 0.8, 0);
        }
        return $data;
    }
}