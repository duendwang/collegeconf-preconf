<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * RegistrationTeams seed.
 */
class RegistrationTeamsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Team A',
                'description' => NULL,
            ],
            [
                'id' => '2',
                'name' => 'Team B',
                'description' => NULL,
            ],
            [
                'id' => '3',
                'name' => 'Team C',
                'description' => NULL,
            ],
        ];

        $table = $this->table('registration_teams');
        $table->insert($data)->save();
    }
}
