<?php
require_once 'Subject.php';
require_once 'Decorator.php';

$m = new HolidayDiscount(new MarkDiscount(new CartMethod()));
printAll($m->execute());

function printAll($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}