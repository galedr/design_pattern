<?php

require 'Context.php';
require 'methodConfig.php';
require 'Interpreter.php';

$source = "[<<測試用文字abcde千萬別太牛皮12345>>]";
$context = new Context();

$list = array(new LetterExpression(), new NumberExpression());

foreach ($list as $k => $method) {
    $context->setContext($source);
    $source = $method->interpreter($context);
}
echo $source;

// 使用config 包裝方法的練習案例
$method = new Methods();

$list = $method->getConfig('ent');

foreach ($list as $k => $method) {
    $context->setContext($source);
    $source = $method->interpreter($context);
}
echo $source;