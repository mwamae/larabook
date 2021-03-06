<?php

use Larabook\Users\UserRepository;

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    protected  $userRepository;


    function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;
    }

    public function index()
	{
        $users = $this->userRepository->getPaginated();

        return View::make('users.index')->withUsers($users);
	}

    public function show($username)
    {
        $user = $this->userRepository->findByUsername($username);

        return View::make('users.show')->withUser($user);
    }


}
