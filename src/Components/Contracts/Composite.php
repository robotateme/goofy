<?php


namespace Goofy\Components\Contracts;

use Goofy\Builders\InterviewBuilder;

/**
 * Класс для составных компонентов.
 * Наследует общий класс для всех компонетов
 */
abstract class Composite extends Component
{

    /**
     * Для простого хранения и обращения к данным.
     * Можно конечно было додумать итератор...
     *
     * @var \SplObjectStorage
     */
    public \SplObjectStorage $children;


    /**
     * Этот конструктор не следует перекрывать.
     * В нем инициализация \SplObjectStorage.
     * Composite constructor.
     */
    public function __construct()
    {

    }

    /**
     * Метод добавления дочерних элементов.
     * Здесь есть загадка с return для меня.
     * Войд должен сойти.
     * Здесь он должен определяться parent для элемента.
     * @param Component $component
     */
    public function attach(Component $component): void
    {
    }
}