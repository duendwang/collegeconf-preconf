<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinancesFixture
 */
class FinancesFixture extends TestFixture
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
                'receive_date' => '2021-12-12',
                'locality_id' => 1,
                'finance_type_id' => 1,
                'count' => 1,
                'rate' => 1.5,
                'charge' => 1.5,
                'payment' => 1.5,
                'balance' => 1.5,
                'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created' => '2021-12-12 06:09:13',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:13',
            ],
        ];
        parent::init();
    }
}
