<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: internone
 * Date: 6/20/15
 * Time: 12:54 PM
 */



class RegistrationForm extends FormValidator {

    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email:unique:users',
        'password' => 'required|confirmed'
    ];
}