<?php


namespace Goofy\Algorithms\Contracts;


use Goofy\Components\Contracts\Component;

abstract class AbstractAlgorithm
{
    /**
     * Какой-то конфиг с
     * условиями выполнения
     * алгоритма и прочими данными
     * @var array
     */
    protected array $config;

    /**
     * Публичная функция для инициализации
     * Выполняется в конструкторе
     * @return void
     */
    abstract public function init(): void;

    /**
     * AbstractAlgorithm constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
    }

    /**
     * Метод для выполнения алгоритма
     * на вход подаётся Component
     * Мы должны быть уверены
     * во внутренней конструкции данных объекта
     * @param Component $interview
     * @return mixed
     */
    abstract public function calculate(Component $interview);
}