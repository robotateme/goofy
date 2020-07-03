<?php
require_once "./vendor/autoload.php";

use Goofy\Components\Interview;

$interview = new Interview('I-1');
/**
 * @todo Тут вероятно все таки нужен Builder для строгосоттветсвия контекстов классов при вызове методов
 * Сейчас получается не строгая вложенность, в какой-то мере
 * это можно преодолеть перевызовом методов attach
 * С билдером существует тоже проблема, сложная реализация.
 * Если использовать под каждый композит по билдеру
 * и их подменять то тогда теряется корневой, первый элемент.
 * Можно конечно его хранить в статике, используя Позднее статическое связывание.
 *
*/
$interview->addQuestion('Q1') //Возвращает Question
    ->addVariant('v1', 3) //Возвращает Question
    ->addVariant('v2', 6);

$interview->addQuestion('Q2')
    ->addVariant('v1', 6)
    ->addVariant('v2', 8);

//К примеру интервью начато, провалидировано и закончено.

var_dump($interview);

//Задаём конфиг для рассчёта.

$algorithm = new \Goofy\Algorithms\DefaultAlgorithm([
    'Cook' => 9,
    'Gourmet' => 14
]);

//считаем как нам удобно. В методе return не предопределён.
$algorithm->calculate($interview);

