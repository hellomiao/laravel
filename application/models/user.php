<?php

class User extends Eloquent {

    public static $table = 'users';

    public function set_password($password) {
        $this->set_attribute('password', Hash::make($password));
    }

}