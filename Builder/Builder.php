<?php

// Builder : 為具體建造者的介面
interface IBuilder
{
    public function bornLooks();
    public function wealth();
    public function job();
    public function relationship();
    public function getManType();
}