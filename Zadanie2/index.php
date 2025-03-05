<?php
require_once "User.php";
require_once "UserService.php";

$user1 = new User("Алиса", "password123", "1990-05-01");
$user2 = new User("Матвей", "password456", "1985-10-15");
$user3 = new User("Мармок", "password789", "1991-08-19");

$users = [$user1, $user2, $user3];

$userService = new UserService();

$sortedByUsernameAsc = $userService->sortByUsername($users, 'asc');

$sortedByBirthdayDesc = $userService->sortByBirthday($users, 'desc');

echo "Сортировка по имени (возрастание):\n";
foreach ($sortedByUsernameAsc as $user) {
    echo $user->getUsername() . "\n";
}

$sortedByBirthdayDesc = $userService->sortByBirthday($users, 'desc');

echo "\nСортировка по дате рождения (убывание):\n";
foreach ($sortedByBirthdayDesc as $user) {
    echo $user->getUsername() . " - " . $user->getBirthday()->format('Y-m-d') . "\n";
}
?>
