<?php
class Book {
    private string $title;
    private string $author;
    private string $isAvailable;

    public function __construct($title, $author) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true;
    }

    public function getTitle() :string
    {
        return $this->title;
    }

    public function getAuthor() :string
    {
        return $this->author;
    }

    public function isAvailable() :bool
    {
        return $this->isAvailable;
    }

    public function setAvailable($availability): void 
    {
        $this->isAvailable = $availability;
    }
}

