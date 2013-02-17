<?php

class Entry {

    public static function hashPassword($password) {
        return substr(md5($password), 8, 16);
    }

}
