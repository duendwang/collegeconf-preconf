<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'attendee_id' => 1,
                'cell_phone' => 'Lorem ip',
                'email' => 'Lorem ipsum dolor sit amet',
                'locality_id' => 1,
                'active' => 1,
                'last_login' => '2021-12-12 06:09:20',
                'creator' => 1,
                'created' => '2021-12-12 06:09:20',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:20',
            ],
        ];
        parent::init();
    }
}
