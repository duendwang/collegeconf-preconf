<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * RateTypes seed.
 */
class RateTypesSeed extends AbstractSeed
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
                'name' => 'Full Time',
                'description' => '',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'FTTA',
                'description' => '',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'Nurse',
                'description' => 'Non-FTTA',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'FTTA Nurse',
                'description' => '',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '5',
                'name' => 'Serving',
                'description' => 'Registration team serving ones, speaking brothers, or A/V brothers',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '6',
                'name' => 'Saturday Only',
                'description' => 'Oak Glen only',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '7',
                'name' => 'Late Fee',
                'description' => 'Late fee added to applicable registration categories for attendees registered after the first deadline.',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '8',
                'name' => 'Meal',
                'description' => 'Only used during conference.',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '9',
                'name' => 'Booklet',
                'description' => 'Only used during conference.',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '10',
                'name' => 'Water Bottle',
                'description' => 'Only used during conference.',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
        ];

        $table = $this->table('rate_types');
        $table->insert($data)->save();
    }
}
