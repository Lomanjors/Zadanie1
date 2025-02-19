<?php
class Library {
    private $books = [];
    private $users = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function registerUser($user) {
        $this->users[] = $user;
    }

    public function findBookByTitle($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function findUserById($userID) {
        foreach ($this->users as $user) {
            if ($user->userID === $userID) {
                return $user;
            }
        }
        return null;
    }
}
