<?php
use Page\Login as LoginPage;
class WP_LI_34Cest
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
     * Click on Create a nee account hyperlink
     */
    public function clickOnCreateNewAcc(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->wait(10);
        $I->click(LoginPage::$createnewacc);
        $I->wait(10);
    }
}

