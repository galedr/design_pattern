<?php

interface IStrategy
{
    public function move();
}

class TenPercentOff implements IStrategy
{
    protected $checkout;

    public function __construct(ICheckout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function move()
    {
        echo $this->checkout->pay() . '享有九折優惠！ <br>';
    }
}

class CouponFeedBack implements IStrategy
{
    protected $checkout;

    public function __construct(ICheckout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function move()
    {
        echo $this->checkout->pay() . '享有coupon回饋！ <br>';
    }
}

class Normal implements IStrategy
{
    protected $checkout;

    public function __construct(ICheckout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function move()
    {
        echo $this->checkout->pay() . '優惠不是天天有 <br>';
    }
}