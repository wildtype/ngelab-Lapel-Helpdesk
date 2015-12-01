<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('insert new product');
$I->amOnPage('/product/create');
$I->see('Create New Product');
$I->fillField('Name', 'Produk tes insert');
$I->fillField('Code', 'PT-01');
$I->fillField('Description', 
    'Sebuah produk uji yang diisikan secara otomatis oleh codeception');
$I->click('Submit');
$I->seeCurrentUrlEquals('/product');
$I->dontSeeElement('.error');
$I->dontSeeElement('#product_name_field');
$I->see('Produk tes insert');
$I->see('PT-01');
