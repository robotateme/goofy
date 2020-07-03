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
        $this->title = $title;
        parent::__construct();
    }
}
