<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * AccountTypes seed.
 */
class AccountTypesSeed extends AbstractSeed
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
                'name' => 'Overseer',
                'code' => 'OVR',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'Registration Team Core',
                'code' => 'CORE',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'Registration Team Member',
                'code' => 'REG',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'Locality Registration',
                'code' => 'LOC',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '5',
                'name' => 'Cashier',
                'code' => 'CASH',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
        ];

        $table = $this->table('account_types');
        $table->insert($data)->save();
    }
}
