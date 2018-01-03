<?php

abstract class IInterpreter
{
    public abstract function interpreter(Context $context);
}

class MarkExpression extends IInterpreter
{
    public function interpreter(Context $context)
    {
        $normal = array('<', '>', '[', ']');
        $trans = array('〈', '〉', '〖', '〗');
        return str_replace($normal, $trans, $context->getContext());
    }
}

class LetterExpression extends IInterpreter
{
    public  function interpreter(Context $context)
    {
        return strtoupper($context->getContext());
    }
}

class NumberExpression extends IInterpreter
{
    public  function interpreter(Context $context)
    {
        return preg_replace('/([0-9])/', '@', $context->getContext());
    }
}