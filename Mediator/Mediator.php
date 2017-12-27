<?php

interface IMediator
{
    public function notify($type, $message);
}

class Mediator implements IMediator
{
    protected $attack;
    protected $tank;
    protected $support;

    // 注入所有子單元Class
    public function __construct(Attack $attack, Tank $tank, Support $support)
    {
        $this->attack = $attack;
        $this->tank = $tank;
        $this->support = $support;

        $this->tank->setMediator($this);
        $this->attack->setMediator($this);
        $this->support->setMediator($this);
    }

    public function notify($type, $message, $name = null)
    {
        if (!empty($name)) {
            echo '中介者收到來自於' . $name . '的『' . $message . '』訊息，進行處理 : <br>';
        } else {
            echo '中介者收到' . $message . '訊息，進行處理 : <br>';
        }

        switch ($type) {
            case 'attack':
                $this->attack->action();
                break;
            case 'tank':
                $this->tank->action();
                break;
            case 'support':
                $this->support->action();
                break;
            default :
                $this->attack->receive($message);
                $this->support->receive($message);
                $this->tank->receive($message);
                break;
        }
    }
}