<?php

use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;
class WP_LI_28Cest
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
        $I->changePassword('1123456789abcdf','1123456789abcdf1');
        $I->wait(5);
        $I->logout();
        $I->click(LoginPage::$SignIn);
        $I->wait(10);
        $I->loginAsAdmin('khaai.0905@gmail.com','1123456789abcdf1');
        $I->wait(5);
    }
}

