<?php

class UserModel {
    private $users;

    public function __construct() {
        $this->loadUsers();
    }

    // Load users from the JSON file
    private function loadUsers() {
        $jsonFile = __DIR__ . '/../users.json';
        if (file_exists($jsonFile)) {
            $jsonData = file_get_contents($jsonFile);
            $this->users = json_decode($jsonData, true)['users'];
        } else {
            $this->users = [];
        }
    }

    // Validate the user based on username and password
    public function validateUser($username, $password) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}
