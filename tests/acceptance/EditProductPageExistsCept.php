<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see edit product page');
$I->amOnPage('/product');
$I->click('Edit');
$I->seeCurrentUrlMatches('~^/product/(\d+)/edit$~');
$I->see('Edit product');
$I->seeElement('form',['class' => 'pure-form pure-form-stacked']);
$I->seeElement('input', ['name' => 'name']);
