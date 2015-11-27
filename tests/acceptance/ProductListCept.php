<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see list of products');
$I->amOnPage('/product');
$I->see('Product List');
$I->see('Code-86');
$I->see('Lapan anam situasi aman, ganti!');
$I->seeElement('.edit_link');
$I->seeElement('.delete_link');
