<?php
use Page\Login as LoginPage;
class WP_LI_37Cest
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
     * Click on Back to WordPress.com hyperlink
     */
    public function clickOnBackToWordPress(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->wait(10);
        $I->click(LoginPage::$backtowordpress);
        $I->wait(10);
    }
}

