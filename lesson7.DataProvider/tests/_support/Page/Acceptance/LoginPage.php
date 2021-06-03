<?php
namespace Page\Acceptance;

/**
 * Class for main page of habr
 */
class HabrMainPage
{
    // Include URL of current page
    public static $URL = '';

    // Locator of Разработка
    public static $navbarLinks = '//*[@id="navbar-links"]/li[%d]';
  
    
    // Link of develop
    
    public static $devLink = 'develop';
    
    // Link of categories
    public static $catLink = '//div[contains(text(), "%s")]';
}
