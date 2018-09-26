<?php

abstract class IIngredients implements IDrink
{
    protected $drink;

    public function __construct(IDrink $drink)
    {
        $this->drink = $drink;
    }

    abstract public function getDrink();
}

class Pearl extends IIngredients
{
    public function getDrink()
    {
        return $this->drink->getDrink() . ' + 珍珠';
    }
}

class Pudding extends IIngredients
{
    public function getDrink()
    {
        return $this->drink->getDrink() . ' + 布丁';
    }
}

class Cashew extends IIngredients
{
    public function getDrink()
    {
        return $this->drink->getDrink() . ' + 腰果';
    }
}

class Bean extends IIngredients
{
    public function getDrink()
    {
        return $this->drink->getDrink() . ' + 青豆';
    }
}