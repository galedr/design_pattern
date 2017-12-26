<?php

// Director 定義實際建造的步驟
class Director
{
    protected $builder;

    public function __construct(IBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function response()
    {
        $this->builder->bornLooks();
        $this->builder->wealth();
        $this->builder->job();
        $this->builder->relationship();
        $this->builder->getManType();
    }

}