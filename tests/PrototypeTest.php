<?php

namespace AlexanderZabornyi\PrototypeTest\Tests;

use AlexanderZabornyi\PrototypeTest\BarBookPrototype;
use AlexanderZabornyi\PrototypeTest\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanCreateBookPrototype()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 5; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo book #' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 10; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar book #' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}
