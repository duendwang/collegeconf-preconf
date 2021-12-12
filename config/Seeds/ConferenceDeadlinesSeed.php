<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ConferenceDeadlines seed.
 */
class ConferenceDeadlinesSeed extends AbstractSeed
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
                'name' => 'Determine conference location/dates; form subteams',
                'weeks_before' => '9',
                'weekday' => '1',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'Receive brochure; update email list',
                'weeks_before' => '6',
                'weekday' => '1',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'Send initial email w/ brochure; update LRC; update email to LRC',
                'weeks_before' => '5',
                'weekday' => '1',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'Send registration announcement',
                'weeks_before' => '3',
                'weekday' => '2',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '5',
                'name' => 'Registration announcement receipt received',
                'weeks_before' => '2',
                'weekday' => '1',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '6',
                'name' => 'First pre-registration deadline',
                'weeks_before' => '1',
                'weekday' => '3',
                'time' => '19:00:00',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '7',
                'name' => 'Send out first pre-registration confirmation',
                'weeks_before' => '1',
                'weekday' => '5',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '8',
                'name' => 'Second pre-registration deadline',
                'weeks_before' => '0',
                'weekday' => '2',
                'time' => '19:00:00',
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '9',
                'name' => 'Second pre-registration processing; initial summary',
                'weeks_before' => '0',
                'weekday' => '4',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
            [
                'id' => '10',
                'name' => 'Send final summary',
                'weeks_before' => '-1',
                'weekday' => '5',
                'time' => NULL,
                'creator' => NULL,
                'created' => '2021-12-12 00:00:00',
                'modifier' => NULL,
                'modified' => '2021-12-12 00:00:00',
            ],
        ];

        $table = $this->table('conference_deadlines');
        $table->insert($data)->save();
    }
}
