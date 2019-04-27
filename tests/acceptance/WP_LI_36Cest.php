<?php
use Page\Login as LoginPage;
class WP_LI_36Cest
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
     * Click on Lost your password hyperlink
     */
    public function clickOnLostYourPass(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->wait(10);
        $I->click(LoginPage::$lostpass);
        $I->wait(10);
    }
}

