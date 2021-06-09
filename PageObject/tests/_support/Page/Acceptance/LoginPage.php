<?php
namespace Page\Acceptance;
/**
 * class for check auth
 */

class LoginPage
{   
    /**
     * URL of current page
     */
    public static $URL = '';
    /**
     * .. for locked user
     */
    public const LOCKED_OUT_USERNAME = 'locked_out_user';

    /** 
     * Password
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Selector for input user's name 
     */
    public static $loginInput = '//input[@id="user-name"]';

    /** 
     * Selector of input password user's  
     */
    public static $passwordInput = '//input[@id="password"]';

    /** 
     * Selector for login of authorization 
    */
    public static $loginButton = '//input[@id="login-button"]';

    /**
     * Selector for container(block) with error 
     */
    public static $errorMessageContainer = '//div[@class="error-message-container error"]';

    /**
     * Selector for button(Submit) with Error 
    */

    public static $errorButton = '//button[@class="error-button"]';


    /**
     * Object of acceptance tester
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Constructor
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    /**
     * The function to fill in the username field
     */
    public function fillUsernameField()
    {
      $this->acceptanceTester->fillField(self::$loginInput, self::LOCKED_OUT_USERNAME);
      
      return $this;
    }

    /**
     * The function for fills in the password input field
     */
    public function fillPasswordField()
    {
      $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);

      return $this;
    }

    /**
     * The function for clicks on the login button
     */
    public function clickLoginButton(){
        
        $this->acceptanceTester->click(self::$loginButton);
        
        return $this;
    }

    /** 
     * Click in the button of error's
     */

    public function clickErrorButton(){
     
        $this->acceptanceTester->click(self::$errorButton);

        return $this;
     
    }

}
