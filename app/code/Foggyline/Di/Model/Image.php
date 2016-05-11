<?php

namespace Foggyline\Di\Model;

class Image
{
    public $myVtArg1;
    public $myVtArg2;

    public function __construct($myVtArg1, $myVtArg2)
    {
        $this->myVtArg1 = $myVtArg1;
        $this->myVtArg2 = $myVtArg2;
    }
}
