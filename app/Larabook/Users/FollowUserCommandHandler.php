<?php namespace Larabook\Users;


use Laracasts\Commander\CommandHandler;

class FollowUserCommandHandler implements CommandHandler {

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */

    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    public function handle($command)
    {
        // TODO: Implement handle() method.

        $user = $this->userRepo->findById($command->userId);

        $this->userRepo->follow($command->userIdToFollow, $user);

        return $user;
    }
}