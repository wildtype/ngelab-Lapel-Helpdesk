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
$I->fillField('Title','Masalah baru');
$I->fillField('Problem Description','Masalahnya saya ngga tau mana yang bermasalah');
$product = $I->grabTextFrom('#product_id option:nth-child(2)');
$user = $I->grabTextFrom('#user_id option:nth-child(2)');
$I->selectOption('#product_id', $product);
$I->selectOption('#user_id', $user);
$I->click('#submitbutton');
$I->dontSee('Error');
$I->seeCurrentUrlEquals('/problem');
$I->amOnPage('/problem');
$I->see('Problem List');
$I->seeInTitle('Problem List');
$I->see('Masalah baru');

//Lihat masalah
$I->click('Masalah baru');
$I->seeCurrentUrlMatches("~/problem/(\d+)$~");
$I->dontSee('Exception');
$I->dontSee('Error');
$I->seeInTitle('Problem: Masalah baru');
$I->see('Masalah baru');
$I->see('Masalahnya saya ngga tau mana yang bermasalah');
$I->see('Edit');
$I->seeElement('a', ['id'=>'edit-link']);
$I->click('#edit-link');
$I->seeCurrentUrlMatches('~^/problem/(\d+)/edit$~');
$I->seeInTitle('Edit Problem: Masalah baru');
$I->seeElement('input', ['type'=>'text', 'name'=>'title']);
$I->seeElement('textarea', ['name'=>'description']);
$I->seeElement('select', ['name'=>'product_id']);
$I->seeElement('select', ['name'=>'user_id']);
$I->seeElement('input', ['type'=>'file', 'name'=>'attachment_file']);
$I->fillField('Title', 'Masalah lama');
$I->click('Submit');
$I->dontSee('Exception');
$I->dontSee('Error');

//ada tombol delete
$I->amOnPage('/problem');
$I->click('Masalah baru');
$I->seeElement('input', ['type'=>'submit','id'=>'delete-problem-button']);
$I->click('#delete-problem-button');
$I->amOnPage('/problem');
$I->dontSee('Masalah baru');
