<?php
class UserService {
    public function sortByUsername(array $users, $order = 'asc'): array 
    {
        usort($users, function($a, $b) use ($order): int 
        {
            return ($order === 'asc') ? strcmp($a->getUsername(), $b->getUsername()) : strcmp($b->getUsername(), $a->getUsername());
        });
        return $users;
    }

    public function sortByBirthday(array $users, $order = 'asc'): array 
    {
        usort($users, function($a, $b) use ($order): int 
        {
            return ($order === 'asc') ? $a->getBirthday() <=> $b->getBirthday() : $b->getBirthday() <=> $a->getBirthday();
        });
        return $users;
    }
}
