<?php

namespace Tests\Acceptance;

use Codeception\Example;
use Page\Acceptance\HabrMainPage;

/**
 * Class for testing to category
 * @group test
 */
class SiteCategoryCest
{
    /**
     * open category of menu
     * @group test
     * @param Example $data
     * @dataProvider getDataForCategory
     */
    public function chooseAnyCategories(\AcceptanceTester $I, Example $data)
    {
        $I->amOnPage(HabrMainPage::$URL);
        $I->click(sprintf(HabrMainPage::$navbarLinks, $data['category']));
        $I->waitForElementClickable(sprintf(HabrMainPage::$catLink);
        $I->seeElement(sprintf(HabrMainPage::$catLink, $data['title']));
        $I->seeInCurrentUrl($data['url']);
    }

    protected function getDataForNavbarlinks()
    {   
        return[
            ['category' => 2, 'url' => 'develop', 'title' => 'Разработка'],
            ['category' => 7, 'url' => 'popsci', 'title' => 'Научпоп']
        ];    
    }
}