<?php

//登录
Route::get('login', function() {

            return View::make('user.login');
        });

Route::post('login', function() {
            $email = Input::get('email');
            $password = Input::get('password');
            $credentials = array('username' => $email, 'password' => $password);
            if (Auth::attempt($credentials)) {

                return Redirect::to('home');
            } else {

                return Redirect::to('login')
                                ->with('login_errors', true);
            }
        });

Route::get('logout', function() {
            Auth::logout();
        });
//home       
Route::get('home','user@home');