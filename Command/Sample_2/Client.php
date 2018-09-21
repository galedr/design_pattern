<?php

namespace Command\Sample_2;

class Client_1
{
    private $keys = [];
    public $invoker;

    public function __construct(Invoker $invoker)
    {
        $this->invoker = $invoker;
    }

    public function setCode($keys)
    {
        if (!is_array($keys)) {
            array_push($this->keys, $keys);
        } else {
            $this->keys = $keys;
        }
    }

    public function execute($key)
    {
        $set = $this->setCodeToCommands();
        if (!$set) {
            echo 'set command error';
            exit;
        }
        return $this->invoker->execute($key);
    }

    /**
     * @return bool : 按照輸入的指令, 至config 找出對應的method, 並set 到Command 裡
     */
    private function setCodeToCommands()
    {
        try {
            $config = new Methods();
            foreach ($this->keys as $k => $v) {
                $command = $config->getConfig($v);
                $this->invoker->setCommand($v, new $command(new Receiver()));
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

require_once 'Invoker.php';
require_once 'Command.php';
require_once 'Receiver.php';
require_once 'Methods.php';

$m = new Client_1(new Invoker());
$m->setCode([0, 2]);
echo $m->execute(0) . '<br>';
echo $m->execute(2);
