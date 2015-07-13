<?php

use Larabook\Forms\PublishStatusesForm;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

class StatusesController extends \BaseController {


    protected $statusRepository;
    /**
     * @var PublishStatusesForm
     */
    protected $publishStatusesForm;

    function __construct(PublishStatusesForm $publishStatusesForm, StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
        $this->publishStatusesForm = $publishStatusesForm;
    }


    public function index()
	{
        $statuses = $this->statusRepository->getFeedForUser(Auth::user());

		return View::make('statuses.index',  compact('statuses') );
	}


	public function store()
	{
        $input = Input::get();

        $input['userId'] = Auth::id();

        $this->publishStatusesForm->validate($input);


        $this->execute(PublishStatusCommand::class, $input);

        Flash::message('Your Status has been posted');

        return Redirect::back();

	}




}
