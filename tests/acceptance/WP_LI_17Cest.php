<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_17Cest
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
     * Login with password enter first space value
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.0905@gmail.com', ' Khaai@@0905');
        $I->wait(5);
    }
}

