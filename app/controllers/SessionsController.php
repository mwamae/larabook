<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController {


    /**
     * @var SignInForm
     */
    private $signInForm;

    /**
     * @param SignInForm $signInForm
     */
    function __construct(SignInForm $signInForm)
    {
        $this->beforeFilter('guest', ['except'=> 'destroy']);

        $this->signInForm = $signInForm;
    }

    /**
	 * Display a login form.
	 *
	 */

	public function create()
	{
		//
        return View::make('sessions.create');
	}


	public function store()
	{
        $input = Input::only('username', 'password');

        $this->signInForm->validate($input);

        if(! Auth::attempt($input)) {

            Flash::message('We were unable to log you in. Please check your credentials and try again!');

            return Redirect::back()->withInput();
        }

        Flash::message('Welcome back!');

        return Redirect::intended('statuses');



	}

    public function destroy()
    {
        Flash::message('You are now logged out');

        Auth::logout();

        return Redirect::home();
    }





}
