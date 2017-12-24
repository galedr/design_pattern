<?php

interface IMobileSuit
{
    public function getWeapon();
    public function getArmor();
}

class GundumFactory implements IMobileSuit
{
    public function getArmor()
    {
        return new GundumArmorFactory();
    }

    public function getWeapon()
    {
        return new GundumWeaponFactory();
    }
}

class ZakuFactory implements IMobileSuit
{
    public function getWeapon()
    {
        return new ZakuWeaponFactory();
    }

    public function getArmor()
    {
        return new ZakuArmorFactory();
    }
}