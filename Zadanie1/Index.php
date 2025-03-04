<?php
require_once "User.php";
require_once "Book.php";
require_once "Library.php";

$library = new Library();

$book1 = new Book("1984", "Джордж Оруэлл");
$book2 = new Book("Убить живого", "Харпер Ли");

$library->addBook($book1);
$library->addBook($book2);

$user1 = new User("Иван", 1);
$library->registerUser($user1);

$user1->borrowBook($book1);
echo "Задолжность: " .  $user1->getPenalty(); 

echo "\n";

$user1->returnBook($book1);
echo "Наличие книги: " . $book1->isAvailable();