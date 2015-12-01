<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create, Read, Update, and Delete Product');
$I->amOnPage('/product/create');
$I->fillField('name', 'nama produk untuk dihapus lagi');
$I->fillField('code', 'Code-009');
$I->fillField('description', 'Ini nanti dihapus');
$I->click('Submit');
$I->see('nama produk untuk dihapus lagi');
$I->amOnPage('/product');
$I->click('Code-009');
$I->seeCurrentUrlMatches('~$/product/(\d+)~');
$I->see('View Product Code-009');
$I->see('nama produk untuk dihapus lagi');
$I->amOnPage('/product');
$I->seeElement('input',['id' => 'delete-Code-009']);
$I->click('#delete-Code-009');
$I->dontSee('nama produk untuk dihapus lati');
