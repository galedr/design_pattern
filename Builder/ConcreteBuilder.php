<?php
// 實際生產的單元
class LoserBuilder implements IBuilder
{
    public function bornLooks()
    {
        echo '又醜又臭 <br>';
    }
    public function wealth()
    {
        echo '一窮二白 <br>';
    }
    public function job()
    {
        echo '屎一樣的工作 <br>';
    }
    public function relationship()
    {
        echo '沒有異性愛你 <br>';
    }
    public function getManType()
    {
        echo '『得到一個魯蛇』 <br>';
    }
}

class WinnerBuilder implements IBuilder
{
    public function bornLooks()
    {
        echo '天生麗質，羨煞眾生的長相 <br>';
    }
    public function wealth()
    {
        echo '富可敵國，錢多到八輩子花不完 <br>';
    }
    public function job()
    {
        echo '錢多事少離家近，或是根本不用工作 <br>';
    }
    public function relationship()
    {
        echo '身邊從來不缺戀人 <br>';
    }
    public function getManType()
    {
        echo '『得到一個人生贏家』 <br>';
    }
}