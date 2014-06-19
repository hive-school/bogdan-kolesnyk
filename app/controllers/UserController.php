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

}
