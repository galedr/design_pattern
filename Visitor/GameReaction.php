<?php

//Visitor
interface IGameReaction
{
    public function getWinReaction(Win $win);
    public function getLostReaction(Lose $lose);
}

class SlotGameReaction implements IGameReaction
{
    public function getWinReaction(Win $win)
    {
        return '您在拉霸遊戲中獲勝了！贏得獎品iPhone X 乙台！';
    }
    public function getLostReaction(Lose $lose)
    {
        return '您在拉霸遊戲中失敗了 .... 就跟您的人生一樣。';
    }
}

class CardGameReaction implements IGameReaction
{
    public function getWinReaction(Win $win)
    {
        return '您在卡牌遊戲中獲勝了！恭喜贏得香港台北來回機票兩張！';
    }
    public function getLostReaction(Lose $lose)
    {
        return '您在卡牌遊戲中落敗了，不要想出國了，去安全島當出國吧。';
    }
}

class StampGameReaction implements IGameReaction
{
    public function getWinReaction(Win $win)
    {
        return '您在戳戳樂遊戲中獲勝了，獲得把妹神器BWS一台！';
    }
    public function getLostReaction(Lose $lose)
    {
        return '您在戳戳樂遊戲中落敗了，又醜又窮就別想著要把妹子了。';
    }
}

