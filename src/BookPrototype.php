<?php

namespace AlexanderZabornyi\PrototypeTest;

abstract class BookPrototype
{
    protected $title;
    protected $category;

    abstract public function __clone();

    /**
     * Получить заголовок
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Установить заголовок
     *
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}