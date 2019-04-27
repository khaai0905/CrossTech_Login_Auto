<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_21Cest
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
     * Login with password empty
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdminWithoutPass('khaai.0905@gmail.com');
    }
}

