<?php

require 'Context.php';
require 'Interpreter.php';

$source = "[<<測試用文字abcde千萬別太牛皮12345>>]";
$context = new Context();

$list = array(new MarkExpression(), new LetterExpression(), new NumberExpression());
foreach ($list as $k => $method) {
    $context->setContext($source);
    $source = $method->interpreter($context);
}
echo $source;