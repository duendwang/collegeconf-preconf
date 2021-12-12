<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Events seed.
 */
class EventsSeed extends AbstractSeed
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
                'name' => 'Friday Dinner',
                'code' => 'FriDin',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'Friday Evening Meeting',
                'code' => 'FriNMtg',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'Saturday Breakfast',
                'code' => 'SatBk',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'Saturday Morning Meeting',
                'code' => 'SatMMtg',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '5',
                'name' => 'Saturday Lunch',
                'code' => 'SatLun',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '6',
                'name' => 'Saturday Afternoon Meeting',
                'code' => 'SatAMtg',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '7',
                'name' => 'Saturday Dinner',
                'code' => 'SatDin',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '8',
                'name' => 'Satuday Evening Meeting',
                'code' => 'SatNMtg',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '9',
                'name' => 'Lord\'s Day Breakfast',
                'code' => 'LDBk',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '10',
                'name' => 'Lord\'s Day Morning Meeting',
                'code' => 'LDMMtg',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '11',
                'name' => 'Lord\'s Day Lunch',
                'code' => 'LDLun',
                'description' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
        ];

        $table = $this->table('events');
        $table->insert($data)->save();
    }
}
