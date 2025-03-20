<?php
class Book
{
    private string $title;
    private string $author;
    private bool $isAvailable;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    public function setAvailable(bool $availability): void
    {
        $this->isAvailable = $availability;
    }
}
