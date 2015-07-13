<?php namespace Larabook\Registration;
/**
 * Created by PhpStorm.
 * User: internone
 * Date: 6/20/15
 * Time: 3:07 PM
 */

class RegisterUserCommand {

    public $username;

    public $email;

    public $password;

    function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }


}