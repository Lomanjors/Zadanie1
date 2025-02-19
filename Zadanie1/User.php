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

    public function borrowBook($book) {
        if ($book->isAvailable()) {
            $book->setAvailable(false);
            $this->borrowedBooks[] = $book;
        }
    }

    public function returnBook($book) {
        $key = array_search($book, $this->borrowedBooks);
        if ($key !== false) {
            unset($this->borrowedBooks[$key]);
            $book->setAvailable(true);
        } else {
            $this->penalty += 5; // Штраф за несвоевременный возврат
        }
    }

    public function getPenalty() {
        return $this->penalty;
    }
}