<?php

namespace Goofy\Components;


use Goofy\Components\Contracts\Composite;

class Question extends Composite
{
    public string $title;

    /**
     * Question constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {

    }

    /**
     * Добавление вариантов к вопросам
     * обертка на attach
     * @param string $title
     * @param int $cost
     * @return $this|Composite
     */
    public function addVariant(string $title, int $cost): Composite
    {
    }
}
