<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_22Cest
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
     * Login with email empty
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdminwithoutemail();
        $I->waitForText('Welcome',5);
    }
}

