<?php

class ClickCest
{
/**
 * Поиск товара Blouse
 * Проверить кликабельность "мышью"
 * Проверить обратное действие модального окна после клика "мышью"
 * Проверить соответствующего заданного текста Blouse
 */
    public function tryToClickTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
		$I->file_exists('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
		$I->moveMouseOver( '#homefeatured > li:nth-child(2) > div' );
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->seeElement('#product > div.fancybox-wrap.fancybox-desktop.fancybox-type-image.fancybox-opened > div');
		$I->checkOption('#product > div.fancybox-wrap.fancybox-desktop.fancybox-type-image.fancybox-opened > div > div.fancybox-title.fancybox-title-float-wrap > span');
    }
}
