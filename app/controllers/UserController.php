<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $validation = Validator::make(Input::all(), [
            'username' => 'required | min:6',
            'password' => 'required | min:6',
            'passwordConfirmation' => 'same:password',
            'email' => 'required | email | unique:users',
            'publicKey' => 'required'
        ]);
        if ($validation->fails()) {
            Input::flashOnly('publicKey');
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        User::create([
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'public_key' => Input::get('publicKey')
        ]);

        return Redirect::to('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * User login
     *
     * @return Response
     */
    public function login()
    {
        return View::make('user.login');
    }

    /**
     * User logout
     *
     * @return Response
     */
    public function logout()
    {
        return View::make('user.login');
    }
}
