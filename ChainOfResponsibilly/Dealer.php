<?php

class FriendZone extends Handler
{
    protected $capability = array('吃飯');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            echo '好朋友的話' . $request->doRequest() . '還可以，你好臭，離我遠一點';
        } else {
            if ($this->next != null) {
                $this->next->response($request);
            }
        }
    }
}

class AmbiguousZone extends Handler
{
    protected $capability = array('牽手', '擁抱');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            echo '有曖昧的話' . $request->doRequest() . '沒關係，但是你好臭，離我遠一點';
        } else {
            if ($this->next != null) {
                $this->next->response($request);
            }
        }
    }
}

class LoverZone extends Handler
{
    protected $capability = array('接吻');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            echo '情侶的話' . $request->doRequest() . '當然可以囉，你好臭，離我遠一點';
        } else {
            echo '你想幹嘛，我不知道' . $request->doRequest() . '是啥，你再不走我要報警囉';
        }
    }
}