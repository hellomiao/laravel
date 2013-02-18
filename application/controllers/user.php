<?php

class User_Controller extends Base_Controller {

    public function __construct() {
        $this->filter('before', 'auth')->only(array('index', 'home'));
    }

    public function action_home() {
        $nickname = Auth::user()->nickname;
        return View::make('user.home',array("nickname"=>$nickname));
    }

}
