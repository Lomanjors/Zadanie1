<?php
class Library {
    private array $books = [];
    private array $users = [];

    public function addBook($book) :void
    {
        $this->books[] = $book;
    }

    public function registerUser($user): void  
    {
        $this->users[] = $user;
    }

    public function findBookByTitle($title) :mixed
    {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function findUserById($userID): mixed 
    {
        foreach ($this->users as $user) {
            if ($user->userID === $userID) {
                return $user;
            }
        }
        return null;
    }
}
