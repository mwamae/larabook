<?php namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;

class UnfollowUsersCommandHandler implements CommandHandler {

    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    public function handle($command)
    {

        $user = $this->userRepo->findById($command->userId);

        $this->userRepo->unfollow($command->userIdToUnfollow, $user);
    }

}