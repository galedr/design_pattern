<?php

abstract class Composite
{
    protected $name;

    public function getName($name)
    {
        $this->name = $name;
    }
    public abstract function add(Composite $composite);
    public abstract function remove(Composite $composite);
    public abstract function react();
}

// 樹枝
class BattleShip extends Composite
{
    protected $list = [];
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(Composite $composite)
    {
        $this->list[] = $composite;
    }
    public function remove(Composite $composite)
    {
        unset($this->list[array_search($composite, $this->list)]);
    }
    public function react()
    {
        echo '這裡是' . $this->name . '，收到命令！ <br>';
        foreach ($this->list as $item) {
            $item->react();
        }
    }
}

//樹葉
class MobileSuit extends Composite
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(Composite $composite)
    {
        echo '這已經是最底層了，沒有加人權限，不要丟鍋給我。 <br>';
    }
    public function remove(Composite $composite)
    {
        echo '這已經是最底層了，沒有刪人權限，這不是我的鍋。 <br>';
    }
    public function react()
    {
        echo $this->name . '收到命令！ <br>';
    }
}

