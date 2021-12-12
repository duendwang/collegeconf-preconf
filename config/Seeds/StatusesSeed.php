<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Statuses seed.
 */
class StatusesSeed extends AbstractSeed
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
                'name' => 'High School Senior',
                'code' => 'HS',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'College Freshman',
                'code' => 'CollF',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'College Sophomore',
                'code' => 'CollSo',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'College Junior',
                'code' => 'CollJr',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '5',
                'name' => 'College Senior',
                'code' => 'CollSr',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '6',
                'name' => 'FTTA',
                'code' => 'FTTA',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '7',
                'name' => 'Serving on Campus',
                'code' => 'Serv',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '8',
                'name' => 'Other',
                'code' => 'Other',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '9',
                'name' => 'Grad Student',
                'code' => 'Grad',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
        ];

        $table = $this->table('statuses');
        $table->insert($data)->save();
    }
}
