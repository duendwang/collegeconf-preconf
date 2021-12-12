<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttendeesFixture
 */
class AttendeesFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'gender' => 'L',
                'locality_id' => 1,
                'campus_id' => 1,
                'new_one' => 1,
                'allergies' => 'L',
                'status_id' => 1,
                'cell_phone' => 'Lorem ipsum dolor sit a',
                'email' => 'Lorem ipsum dolor sit amet',
                'city_state' => 'Lorem ipsum dolor sit amet',
                'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created' => '2021-12-12 06:09:05',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:05',
            ],
        ];
        parent::init();
    }
}
