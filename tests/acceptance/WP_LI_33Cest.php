<?php
use Page\Login as LoginPage;
class WP_LI_33Cest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param AcceptanceTester $I
     * @throws Exception
     * Login with password enter all space value
     */
    public function clickOnContinueWithGG(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->wait(10);
        $I->click(LoginPage::$LoginWithGG);
        $I->wait(10);

    }
}

