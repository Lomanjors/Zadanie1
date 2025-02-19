<?php
class UserService {
    public function sortByUsername(array $users, $order = 'asc') {
        usort($users, function($a, $b) use ($order) {
            return ($order === 'asc') ? strcmp($a->getUsername(), $b->getUsername()) : strcmp($b->getUsername(), $a->getUsername());
        });
        return $users;
    }

    public function sortByBirthday(array $users, $order = 'asc') {
        usort($users, function($a, $b) use ($order) {
            return ($order === 'asc') ? $a->getBirthday() <=> $b->getBirthday() : $b->getBirthday() <=> $a->getBirthday();
        });
        return $users;
    }
}