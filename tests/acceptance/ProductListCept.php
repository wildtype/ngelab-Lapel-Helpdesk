<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see list of products');
$I->amOnPage('/product');
$I->see('Product List');
$I->seeElement('a',['class'=>'edit_link']);
$I->seeElement('input', ['value'=>'Delete Product']);
