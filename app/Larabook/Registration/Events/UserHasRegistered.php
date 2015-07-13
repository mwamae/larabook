<?php namespace Larabook\Registration\Events;
/**
 * Created by PhpStorm.
 * User: internone
 * Date: 6/22/15
 * Time: 8:39 AM
 */
use Larabook\Users\User;


class UserHasRegistered {
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }


}