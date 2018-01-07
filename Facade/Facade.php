<?php

class NewsFacade
{
    protected $car;
    protected $main;
    protected $sport;

    public function __construct(CarArticles $carArticles,
                                MainNewsArticles $mainNewsArticles,
                                SportArticles $sportArticles)
    {
        $this->car = $carArticles;
        $this->main = $mainNewsArticles;
        $this->sport = $sportArticles;
    }

    public function getArticles($channel)
    {
        echo '從Facade 物件得到 .... <br>';
        switch ($channel) {
            case 'car':
                return $this->car->getCarArticles();
                break;
            case 'main':
                return $this->main->getMainArticles();
                break;
            case 'sport';
                return $this->sport->getSportArticles();
                break;
        }
    }
}