<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_06Cest
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
     * Login with email and password valid
     */
    public function loginHappyCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.0905@gmail.com','1123456789abcdf');
        $I->waitForText('My Site',10);
    }
}

