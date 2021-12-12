<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferencesFixture
 */
class ConferencesFixture extends TestFixture
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
                'term' => 'Lore',
                'year' => 'Lorem ipsum dolor sit amet',
                'part' => 'L',
                'conference_location_id' => 1,
                'start_date' => '2021-12-12',
                'code' => 'L',
                'last_barcode_id' => 1,
                'creator' => 1,
                'created' => '2021-12-12 06:09:11',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:11',
            ],
        ];
        parent::init();
    }
}
