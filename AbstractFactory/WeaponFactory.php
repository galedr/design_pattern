<?php

interface IWeapon
{
    public function craftWeapon();
}

class GundumWeaponFactory implements IWeapon
{
    public function craftWeapon()
    {
        echo '製造鋼彈裝用雷射槍，一槍一個 <br>';
    }
}

class ZakuWeaponFactory implements IWeapon
{
    public function craftWeapon()
    {
        echo '製造薩克專用的熱能斧，可以劈除了鋼彈的任何敵人 <br>';
    }
}