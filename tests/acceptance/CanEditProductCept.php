<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('edit a product');
$I->amOnPage('/product');
$I->click('Edit');
$I->fillField('description', 'Produk kopi sudah diedit');
$I->click('Submit');
$I->see('Produk kopi sudah diedit');
