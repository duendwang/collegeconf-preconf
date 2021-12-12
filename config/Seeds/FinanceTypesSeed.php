<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * FinanceTypes seed.
 */
class FinanceTypesSeed extends AbstractSeed
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
                'name' => 'Pre-registration',
                'description' => 'Registration submitted before the first registration deadline',
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '2',
                'name' => 'Late Pre-registration',
                'description' => 'Registration submitted between the first and second registration deadline',
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '3',
                'name' => 'On-site Registration',
                'description' => 'Registration during the conference',
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '4',
                'name' => 'Cancellation',
                'description' => 'Cancellations approved by the brothers as excused',
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '5',
                'name' => 'Replacement',
                'description' => NULL,
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '6',
                'name' => 'Rate Change',
                'description' => NULL,
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '7',
                'name' => 'Payment',
                'description' => NULL,
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
            [
                'id' => '8',
                'name' => 'Refund Issued',
                'description' => NULL,
                'creator' => NULL,
                'created' => NULL,
                'modifier' => NULL,
                'modified' => NULL,
            ],
        ];

        $table = $this->table('finance_types');
        $table->insert($data)->save();
    }
}
