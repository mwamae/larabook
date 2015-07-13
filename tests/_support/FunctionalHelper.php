<?php namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Laracasts\TestDummy\Factory as TestDummy;



class FunctionalHelper extends \Codeception\Module
{
    public function signIn(){

        $username = 'foo';

        $email= 'foo@example.com';

        $password ='foo';

        $this->haveAnAccount(compact($username, $email, $password));

        $I= $this->getModule('Laravel4');

        $I->amOnPage('/login');

        $I->fillField('username',$username);

        $I->fillField('password', $password);

        $I->click('Sign In');
    }

    public function postAStatus($body)
    {
        $I = $this->getModule('Laravel4');

        $I->fillField('body',$body);

        $I->click('Post Status');

        //$this->have('Larabook\Statuses\Status');
    }

    public function have($model, $overrides=[])
    {
        return TestDummy::create($model, $overrides);
    }

    public function haveAnAccount($overrides =[])
    {
        return $this->have('Larabook\Users\User', $overrides);

    }

}
