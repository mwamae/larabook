<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;

class RegistrationController extends \BaseController  {


    private $registrationForm;

    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
    }


    /**
	 * Show the form for register a user
	 * @return Response
	 */


	public function create()
	{
		//
        return View::make('registration.create');
	}

    public function store()
    {
        $this->registrationForm->validate(Input::all());

        $user = $this->execute(RegisterUserCommand::class);

        Auth::login($user);

        Flash::success('Glad to have you as a Larabook Member');


        return Redirect::home()->with('flash_message', 'Welcome Aboard');

    }

}

