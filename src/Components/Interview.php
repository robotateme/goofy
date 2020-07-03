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
        $this->title = $title;
        parent::__construct();
    }

}
