<?php namespace Larabook\Users;

class UnfollowUsersCommand {

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userIdToUnfollow;

    /**
     * @param string userId
     * @param string userIdToUnfollow
     */
    public function __construct($userId, $userIdToUnfollow)
    {
        $this->userId = $userId;
        $this->userIdToUnfollow = $userIdToUnfollow;
    }

}