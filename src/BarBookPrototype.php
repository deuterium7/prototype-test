<?php

namespace AlexanderZabornyi\PrototypeTest;

class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {
    }
}