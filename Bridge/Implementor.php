<?php

interface IImplementor
{
    public function operation();
}

class PhotoWarehouse implements IImplementor
{
    public function operation()
    {
        return '封包圖片';
    }
}

class ArticleWarehouse implements IImplementor
{
    public function operation()
    {
        return '封包文章';
    }
}

class MusicWarehouse implements IImplementor
{
    public function operation()
    {
        return '封包音樂';
    }
}