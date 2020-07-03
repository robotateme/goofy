<?php
require_once "./vendor/autoload.php";

use Goofy\Components\Interview;

abstract class X
{
    public array $pool = [];
    public self $parent;

    public function add(self $component)
    {
        $component->parent = $this;
        $this->pool[] = $component;
    }
}

class A extends X
{
    public static function build()
    {
        return new ABuilder(new self());
    }
}

class B extends X
{
}

class C extends X
{
}


class ABuilder
{
    public X $master;
    public static X $lateMaster;

    public function __construct(X $master)
    {
        $this->master = $master;
    }

    public function addB(B $b)
    {
        $this->master->add($b);
        self::$lateMaster = $this->master;
        return new BBuilder($b);
    }

    final public function end()
    {
        return self::$lateMaster;
    }
}

class BBuilder extends ABuilder
{
    public function addC(C $c)
    {
        $this->master->add($c);
        return $this;
    }

    public function addB(B $b)
    {
        $this->master = self::$lateMaster;
        return parent::addB($b);
    }

}

$a = A::build()
    ->addB(new B())
    ->addC(new C)
    ->addC(new C)
    ->addC(new C)
    ->addC(new C)
    ->addB(new B())
    ->addC(new C())
    ->end()
;

var_dump($a);




