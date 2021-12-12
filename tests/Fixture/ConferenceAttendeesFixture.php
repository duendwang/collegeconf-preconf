<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferenceAttendeesFixture
 */
class ConferenceAttendeesFixture extends TestFixture
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
                'conference_id' => 1,
                'attendee_id' => 1,
                'barcode_id' => 1,
                'conf_contact' => 1,
                'lodging_group' => 'Lorem ip',
                'lodging_id' => 1,
                'submitter' => 'Lorem ipsum dolor sit amet',
                'rate' => 1.5,
                'amd_paid' => 1.5,
                'check_num' => 'Lorem ip',
                'paid_date' => '2021-12-12',
                'part_time' => 1,
                'creator' => 1,
                'created' => '2021-12-12 06:09:07',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:07',
            ],
        ];
        parent::init();
    }
}
