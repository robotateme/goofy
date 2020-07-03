<?php

namespace Goofy\Components;

use Goofy\Components\Contracts\Composite;

class Interview extends Composite
{
    public string $title;

    /**
     * Interview constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {

    }

    /**
     * Добавление вопросов в интервью
     * @param string $title
     * @return Question
     */
    public function addQuestion(string $title): Question
    {
    }
}
