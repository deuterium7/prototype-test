<?php

namespace AlexanderZabornyi\PrototypeTest;

class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
    }
}