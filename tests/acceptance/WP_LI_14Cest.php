<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_14Cest
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
     * Login with email enter the first space value
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin(' khaai.09055@gmail.com', 'Khaai@@0905');
    }
}

