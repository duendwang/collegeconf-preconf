<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LodgingFacilitiesFixture
 */
class LodgingFacilitiesFixture extends TestFixture
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
                'conference_location_id' => 1,
                'code' => 'Lorem ip',
                'location' => 'Lorem ipsum dolor sit amet',
                'room' => 'Lorem ipsum dolor sit amet',
                'accomodations' => 'Lorem ipsum dolor sit amet',
                'capacity' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'zip' => 'Lor',
                'phone' => 'Lorem ip',
                'comments' => 'Lorem ipsum dolor sit amet',
                'creator' => 1,
                'created' => '2021-12-12 06:09:14',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:14',
            ],
        ];
        parent::init();
    }
}
