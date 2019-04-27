<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Admin extends \AcceptanceTester
{
    /**
     * @param $name
     * @param $password
     * @throws \Exception
     * Function login
     */
    public function loginAsAdmin($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->waitForText('Password',2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
    }

    /**
     * @param $name
     * @throws \Exception
     * Login without password
     */
    public function loginAsAdminWithoutPass($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->waitForText('Password',2);
        $I->click(LoginPage::$loginButton);
        $I->wait(10);
    }

    /**
     * @throws \Exception
     * Login without email
     */
    public function loginAsAdminWithoutEmail()
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$ContinueButton);
        $I->waitForText('Welcome', 10);
    }

    /**
     * @param $newPassword
     * @param $oldPassword
     * @throws \Exception
     * function change password
     */
    public function changePassword( $oldPassword,$newPassword )
    {
        $I = $this;
        $I->loginAsAdmin('khaai.0905@gmail.com',$oldPassword);
        $I->wait(10);
        //$I->waitForText('Welcome',20);
        $I->click(LoginPage::$MyProfile);
        $I->wait(10);
        //$I ->waitForText('Profile', 20);
        $I ->click(LoginPage::$security);
        $I->wait(10);
        //$I ->waitForText('New Password', 20);
        $I->fillField(LoginPage::$NewPasswordTextField,$newPassword);
        $I->waitForElementClickable(LoginPage::$SavePasswordButton);
        $I->click(LoginPage::$SavePasswordButton);
    }

    /**
     * @throws \Exception
     * Function logout
     */
    public function logout()
    {
        $I = $this;
        $I ->click(LoginPage::$LogoutButton);
        $I->wait(5);
    }


}