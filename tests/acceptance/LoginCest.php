<?php

namespace App\Tests\acceptance;

use AcceptanceTester;
use App\Entity\User;
use FunctionalTester;

class LoginCest
{
    public function adminLogin(AcceptanceTester $tester)
    {
        $tester->amOnPage('/login');
        $tester->fillField('email','borashek@inbox.ru');
        $tester->fillField('password','111111');
        $tester->click('login');
        $tester->see('Hello, admin');
    }
}
