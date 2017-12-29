<?php

abstract class IPrototype
{
    protected $armour;
    protected $weapon;
    protected $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setArmour($armour)
    {
        $this->armour = $armour;
    }
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }
    abstract public function create();
    abstract public function __clone();
}

class MakeSpaceMarine extends IPrototype
{
    public function create()
    {
        echo '武器: ' . $this->weapon . '<br>' .
             '裝甲: ' . $this->armour . '<br>' .
             '你得到了' . $this->name . '<br>';
    }
    public function __clone(){}
}

