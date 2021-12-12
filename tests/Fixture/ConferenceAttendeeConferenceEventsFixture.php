<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferenceAttendeeConferenceEventsFixture
 */
class ConferenceAttendeeConferenceEventsFixture extends TestFixture
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
                'conference_attendee_id' => 1,
                'conference_event_id' => 1,
                'creator' => 1,
                'created' => '2021-12-12 06:09:06',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:06',
            ],
        ];
        parent::init();
    }
}
