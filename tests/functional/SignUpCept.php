<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a Larabook account');

$I->amOnPage('/');
$I->see('Sign Up!');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:','JohnDoe');
$I->fillField('Email:','michael@google.com');
$I->fillField('Password:','demo');
$I->fillField('Password Confirmation:','demo');
$I->click('Sign Up!');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to Larabook!');

$I->seeRecord('users', [
    'username' => 'JohnDoe',
    'email' => 'michael@google.com'
]);



$I->assertFalse(Auth::check());