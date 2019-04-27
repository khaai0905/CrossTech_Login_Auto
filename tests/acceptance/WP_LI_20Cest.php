<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_20Cest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param AdminTester $I
     * @param $scenario
     * @throws Exception
     * Login with password enter all space value
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.09055@gmail.com', '             ');
        $I->waitForText('Welcome',10);
        $I->see('Pass/HomePage');
    }
}

