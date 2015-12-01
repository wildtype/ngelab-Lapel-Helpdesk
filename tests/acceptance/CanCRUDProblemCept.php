<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create, Read, Update, and Delete Problem');

//Create
$I->amOnPage('/problem');
$I->see('Problem List');
$I->see('Create new problem');
$I->seeElement('a',['id' => 'create_link']);
