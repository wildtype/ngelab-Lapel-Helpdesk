<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see create product page');
$I->amOnPage('/product/create');
$I->see('Create New Product');
$I->seeElement('#product_name_field');
$I->seeElement('#description_field');
$I->seeElement('#code_field');
