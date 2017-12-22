<?php

class FriendZone extends Handler
{
    protected $capability = array('吃飯');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            echo '好喔，我們是好朋友，我們可以' . $request->doRequest();
        } else {
            if ($this->next != null) {
                $this->next->response($request);
            }
        }
    }
}

class AmbiguousZone extends Handler
{
    protected $capability = array('吃飯', '牽手');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            echo '好喔，我們之間有點曖昧，我們可以' . $request->doRequest();
        } else {
            if ($this->next != null) {
                $this->next->response($request);
            }
        }
    }
}

class LoverZone extends Handler
{
    protected $capability = array('吃飯', '牽手', '親吻');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            echo '好喔，我們是情侶，我們可以' . $request->doRequest() . '還可以幹別的羞羞的事';
        } else {
            echo '你想幹嘛，我不知道' . $request->doRequest() . '是啥，你再不走我要報警囉';
        }
    }
}