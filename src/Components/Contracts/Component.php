<?php


namespace Goofy\Components\Contracts;

/**
* Класс выполняющий роль интефейса
 * Для всех компонентов.
 */
abstract class Component
{
    /**
     * @var Component
     */
    protected self $parent;

    /**
     * @return self
     */
    public function getParent(): self
    {
    }

    /**
     * @param self $parent
     */
    public function setParent(self $parent): void
    {
    }

    /**
     * Метод для выполнения каких-либо
     * операций с объектом или его родителями
     */
    public function operation()
    {
    }
}