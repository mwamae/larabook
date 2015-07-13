<?php 
$I = new FunctionalTester($scenario);

$I->am('a Larabook user');
$I->wantTo('follow other larabook users');

$I->haveAnAccount(['username'=>'OtherUser']);
$I->signIn();

$I->click('Browse Users');
$I->see('OtherUser');
$I->seeCurrentUrlEquals('/users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('OtherUser');

$I->see('Unfollow OtherUser');

$I->click("Unfollow OtherUser");
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Follow OtherUser');
