<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_08Cest
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
     * Login with username invalid and password valid
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('bunbo1', '1123456789abcdf');
        $I->waitForText('Welcome',10);
        $I->see('Pass/HomePage');
    }
}

