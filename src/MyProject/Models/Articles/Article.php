<?php

namespace MyProject\Models\Articles;

use MyProject\Models\Users\User;

class Article
{
    private $id;
    private $title;
    private $text;
    private $authorId;
    private $createdAt;

    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }
    // public function __construct(string $title, string $text, User $author)
    // {
    //     $this->title = $title;
    //     $this->text = $text;
    //     $this->author = $author;
    // }

    // public function getTitle(): string
    // {
    //     return $this->title;
    // }

    // public function getText(): string
    // {
    //     return $this->text;
    // }

    // public function getAuthor(): User
    // {
    //     return $this->author;
    // }
}
