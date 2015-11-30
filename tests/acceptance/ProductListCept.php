<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see list of products');
$I->amOnPage('/product');
$I->see('Product List');
$I->see('k01');
$I->see('kopi biar ga ngantuk');
$I->seeElement('.edit_link');
$I->seeElement('.delete_link');
