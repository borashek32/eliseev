<?php

namespace App\Tests\acceptance;

use AcceptanceTester;

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $tester)
    {
        $tester->amOnPage('/');
        $tester->see('Home');
    }
}
