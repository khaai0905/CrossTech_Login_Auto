<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_12Cest
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
     * Login with email enter HTML
     */
    public function loginBadCase(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('<html>abc</html>', 'Khaai@@0905');
    }
}

