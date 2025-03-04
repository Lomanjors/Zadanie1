<?php
class User {
    private $name;
    private $userID;
    private $borrowedBooks = [];
    private $penalty = 0;

    public function __construct($name, $userID) {
        $this->name = $name;
        $this->userID = $userID;
    }

    public function borrowBook($book): void 
    {
        if ($book->isAvailable()) {
            $book->setAvailable(false);
            $this->borrowedBooks[] = $book;
        }
    }

    public function returnBook($book): void 
    {
        $key = array_search($book, $this->borrowedBooks);
        if ($key !== false) {
            unset($this->borrowedBooks[$key]);
            $book->setAvailable(true);
        } else {
            $this->penalty += 5;
        }
    }

    public function getPenalty(): float|int 
    {
        return $this->penalty;
    }
}
