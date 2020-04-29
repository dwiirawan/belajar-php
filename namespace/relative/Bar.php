<?php

namespace Foo;

use A\Namespace\So\Long\That\You\Have\Forgotten\About\It;

class Bar
{
    private $it;
    
    public function __construct()
    {
        $this->it = new It();
    }
}