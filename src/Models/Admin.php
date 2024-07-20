<?php

    class Admin {
        public function __construct(int $id , string $username , string $password) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
        }
    }