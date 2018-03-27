<?php

class MethodConfig
{
    public function getConfig($channel)
    {
        $list = [
            'news' => [new MarkExpression(), new NumberExpression()],
            'ent' => [new LetterExpression(), new MarkExpression()],
        ];

        return $list[$channel];
    }
}
