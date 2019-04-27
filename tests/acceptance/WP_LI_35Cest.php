<?php
use Page\Login as LoginPage;
class WP_LI_35Cest
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
     * Click on Email me a login link hyperlink
     */
    public function clickOnEmailMeALoginLink(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->wait(10);
        $I->click(LoginPage::$sendbyemail);
        $I->wait(10);
    }
}

