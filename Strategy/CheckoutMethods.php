<?php

interface ICheckout
{
    public function pay();
}

class WebATM implements ICheckout
{
    protected $bill;

    public function __construct($bill)
    {
        $this->bill = $bill;
    }

    public function pay()
    {
        return '總金額' . $this->bill . '元，使用網路ATM結帳';
    }
}

class VISA implements ICheckout
{
    protected $bill;

    public function __construct($bill)
    {
        $this->bill = $bill;
    }

    public function pay()
    {
        return '總金額' . $this->bill . '元，使用VISA卡結帳';
    }
}

class Coupon implements ICheckout
{
    protected $bill;

    public function __construct($bill)
    {
        $this->bill = $bill;
    }

    public function pay()
    {
        return '總金額' . $this->bill . '元，使用優惠卷結帳';
    }
}
