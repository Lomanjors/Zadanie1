<?php
class Library {
    private array $books = [];
    private array $users = [];

    public function addBook(string $book) :void
    {
        $this->books[] = $book;
    }

    public function registerUser(string $user): void  
    {
        $this->users[] = $user;
    }

    public function findBookByTitle(string $title) :mixed
    {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function findUserById(int $userID): mixed 
    {
        foreach ($this->users as $user) {
            if ($user->userID === $userID) {
                return $user;
            }
        }
        return null;
    }
}
