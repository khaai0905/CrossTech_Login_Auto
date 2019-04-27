<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_09Cest
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
     * Login with email valid and password invalid
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.0905@gmail.com', 'Khaai@@09055');
        $I->waitForText('Welcome',10);
    }
}

