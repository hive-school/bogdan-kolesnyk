<?php

class SessionController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (Auth::check()) {
            return Redirect::to('/');
        }
		return View::make('session.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password'))) {
            return Redirect::to('/');
        }
        return Redirect::back()->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
        return Redirect::to('login');
	}


}
