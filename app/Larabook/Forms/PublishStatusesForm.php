<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class PublishStatusesForm extends FormValidator {

    protected $rules = [
        'body' => 'required'
    ];
}