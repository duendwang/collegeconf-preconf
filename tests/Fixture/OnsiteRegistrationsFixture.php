<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OnsiteRegistrationsFixture
 */
class OnsiteRegistrationsFixture extends TestFixture
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
                'registration' => 1639289355,
                'cashier' => 1639289355,
                'hospitality' => 1639289355,
                'badge' => 1639289355,
                'need_cashier' => 1,
                'need_hospitality' => 1,
                'need_badge' => 1,
                'need_old' => 1,
                'old_first' => 'Lorem ipsum dolor sit amet',
                'old_last' => 'Lorem ipsum dolor sit amet',
                'old_locality_id' => 1,
                'creator' => 1,
                'created' => '2021-12-12 06:09:15',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:15',
            ],
        ];
        parent::init();
    }
}
