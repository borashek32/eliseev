<?php

namespace App\Tests\functional;

use AcceptanceTester;
use App\Entity\User;
use FunctionalTester;

class UserCest
{
    public function userLogin(FunctionalTester $tester)
    {
        $tester->haveInRepository( User::class, [
            'id'       => '10000',
            'email'    => 'polina@inbox.ru',
            'roles'    => 'ROLE_USER',
            'password' => '333333'
        ]);

        $tester->seeInRepository(User::class, [
            'id'       => '10000',
            'email'    => 'polina@inbox.ru',
            'roles'    => 'ROLE_USER',
            'password' => '333333'
        ]);
    }
}
