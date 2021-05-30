<?php

class SearchCest
{
/**
 * Проверить кнопку поиска по заданному тексту - Printed dress
 * На странице результатов убедиться, что в точности найден заданный запрос
 */
	
    public function checkToSearchQueryTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
		$I->fillField('#search_query_top', 'Printed dress');
		$I->click('#searchbox > button');
		$I->seeElement('#center_column > div:nth-child(2) > div.top-pagination-content.clearfix > div.product-count');
		$I->seeElement('#center_column > ul > li.ajax_block_product.col-xs-12.col-sm-6.col-md-4.first-in-line.first-item-of-tablet-line.first-item-of-mobile-line > div > div.left-block > div > a.product_img_link');
		$I->seeElement('#center_column > ul > li:nth-child(2) > div > div.left-block > div > a.product_img_link');
		$I->seeElement('#center_column > ul > li.ajax_block_product.col-xs-12.col-sm-6.col-md-4.last-in-line.first-item-of-tablet-line.last-item-of-mobile-line > div > div.left-block > div > a.product_img_link');
		$I->seeElement('#center_column > ul > li.ajax_block_product.col-xs-12.col-sm-6.col-md-4.first-in-line.last-line.last-item-of-tablet-line.first-item-of-mobile-line.last-mobile-line > div > div.left-block > div > a.product_img_link');
		$I->seeElement('#center_column > ul > li.ajax_block_product.col-xs-12.col-sm-6.col-md-4.last-line.first-item-of-tablet-line.last-mobile-line > div > div.left-block > div > a.product_img_link');
    }
}
