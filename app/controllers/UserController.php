<?php

class UserController extends BaseController {

    public function login()
    {
        return View::make('user.login');
    }

    public function contacts()
    {
        return View::make('user.contacts');
    }
    public function register()
    {
        return View::make('user.register');
    }
}
