<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LodgingsFixture
 */
class LodgingsFixture extends TestFixture
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
                'locality_id' => 1,
                'code' => 'Lorem ip',
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'zip' => 'Lor',
                'home_phone' => 'Lorem ipsum dolor ',
                'cell_phone' => 'Lorem ipsum dolor ',
                'pet' => 'Lorem ipsum dolor ',
                'gender' => 'Lorem ipsum dolor sit amet',
                'capacity' => 1,
                'attendee_count' => 1,
                'room' => 'Lorem ipsum dolor sit amet',
                'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created' => '2021-12-12 06:09:14',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:14',
            ],
        ];
        parent::init();
    }
}
