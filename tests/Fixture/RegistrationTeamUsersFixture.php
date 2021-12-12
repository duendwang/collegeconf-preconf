<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistrationTeamUsersFixture
 */
class RegistrationTeamUsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'registration_team_id' => 1,
                'creator' => 1,
                'created' => '2021-12-12 06:09:18',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:18',
            ],
        ];
        parent::init();
    }
}
