<?php

class Admin_login_Controller extends Controller {

    public function action_index() {
       $users = DB::table('users')->get();
       //var_dump($users);
        return View::make('admin::login');
    }

}

?>
