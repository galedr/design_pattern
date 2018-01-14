<?php

class JsonParser extends Handler
{
    protected $capability = array('json');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            return '經過處理的' . $request->doRequest() . '檔案 <br>';
        } else {
            return parent::response($request);
        }
    }
}

class LogParser extends Handler
{
    protected $capability = array('log');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            return '經過處理的' . $request->doRequest() . '檔案 <br>';
        } else {
            return parent::response($request);
        }
    }
}

class CSVParser extends Handler
{
    protected $capability = array('CSV');

    public function response(Request $request)
    {
        if (in_array($request->doRequest(), $this->capability)) {
            return '經過處理的' . $request->doRequest() . '檔案 <br>';
        } else {
            return parent::response($request);
        }
    }
}