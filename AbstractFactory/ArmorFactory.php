<?php

interface IArmor
{
    public function craftArmor();
}

class GundumArmorFactory implements IArmor
{
    public function craftArmor()
    {
        echo '製造鋼彈使用的PS裝甲，一個刀槍不入的觀念 <br>';
    }
}

class ZakuArmorFactory implements IArmor
{
    public function craftArmor()
    {
        echo '製造薩克裝甲，在故事中跟紙糊的沒兩樣 <br>';
    }
}