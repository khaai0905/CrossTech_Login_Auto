<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_11Cest
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
     * Login with email enter special character
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('!@$#^%$^$', 'Khaai@@0905');
        $I->waitForText('Welcome',10);
    }
}

