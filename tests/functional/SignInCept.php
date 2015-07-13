<?php 
$I = new FunctionalTester($scenario);

$I->am('Larabook member');
$I->wantTo('Login to my Larabook account');

$I->signIn();

$I->seeCurrentUrlEquals('/statuses');
$I->see('Welcome back!');