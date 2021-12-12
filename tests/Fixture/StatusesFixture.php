<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatusesFixture
 */
class StatusesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'code' => 'Lore',
                'creator' => 1,
                'created' => '2021-12-12 06:09:19',
                'modifier' => 1,
                'modified' => '2021-12-12 06:09:19',
            ],
        ];
        parent::init();
    }
}
