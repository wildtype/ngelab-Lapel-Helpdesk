<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create, Read, Update, and Delete Problem');

//List Product
$I->amOnPage('/problem');
$I->see('Problem List');
$I->see('Create New Problem');

//Create
$I->seeElement('a',['id' => 'create_link']);
$I->click('Create New Problem');
$I->seeCurrentUrlEquals('/problem/create');
$I->seeInTitle('Create New Problem');
$I->seeElement('input', ['type'=>'text', 'name'=>'title']);
$I->seeElement('textarea', ['name'=>'description']);
$I->seeElement('select', ['name'=>'product_id']);
$I->seeElement('select', ['name'=>'user_id']);
$I->seeElement('input', ['type'=>'file', 'name'=>'attachment_file']);
