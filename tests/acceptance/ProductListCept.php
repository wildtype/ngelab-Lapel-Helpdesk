<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see list of products');
$I->amOnPage('/product');
$I->see('Product List');
$I->see('k01');
$I->see('Produk kopi sudah diedit');
$I->seeElement('.edit_link');
$I->seeElement('.delete_link');
