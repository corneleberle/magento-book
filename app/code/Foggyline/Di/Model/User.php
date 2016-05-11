<?php

namespace Foggyline\Di\Model;

class User implements \Foggyline\Di\Model\TestInterface
{
    public $var1;

    public function __construct($var1)
    {
        $this->var1 = $var1;
    }
}
