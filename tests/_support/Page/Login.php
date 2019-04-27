<?php
namespace Page; //dinh danh dia chi class

class Login
{
    /**
     * @var string
     * since 1.1
     */
    // include url of current page
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    public static $usernameField = '//input[@id="usernameOrEmail"]';

    public static $passwordField = '//input[@id="password"]';

    public static $ContinueButton = 'Continue';

    public static $loginButton = 'Log In';

    public static $TermOfService = '(//p[@class="login__form-terms"])/a[1]';

    public static $LoginWithGG ='//span[@class="social-buttons__service-name"]';

    public static $createnewacc = '(//div[@class="wp-login__links"])/a[1]';

    public static $sendbyemail = '(//div[@class="wp-login__links"])/a[2]';

    public static $lostpass = '((//div[@class="wp-login__links"])/a[3]';

    public static $backtowordpress = '(//div[@class="wp-login__links"])/a[4]';

    public static $vietnamese ='//*[@id="primary"]/div/main/div/div[3]/div/a';

    public static $Changepass = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[1]/label/a';

    public static $MyProfile = '//img[@class="gravatar"]';

    public static $security = '//span[text()="Security"]';

    public static $NewPasswordTextField= '//input[@name="password"]';

    public static $SavePasswordButton = '//button[text()="Save Password"]';

    public static $LogoutButton = '//button[@class="wpnc__close-link"]';

    public static $SignIn = '//a[@href=\'https://wordpress.com/wp-login.php?redirect_to=https%3A%2F%2Fwordpress.com%2F\']';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */

}
