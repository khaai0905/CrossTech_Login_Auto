<?php
use Page\Login as LoginPage;
class WP_LI_32Cest
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
     * Click on Term of service hyperlink
     */
    public function clickOnTermOfService(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->wait(10);
        $I->click(LoginPage::$TermOfService);
        $I->wait(10);
    }
}

