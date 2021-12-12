<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinancesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinancesTable Test Case
 */
class FinancesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FinancesTable
     */
    protected $Finances;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Finances',
        'app.Conferences',
        'app.Localities',
        'app.FinanceTypes',
        'app.ConferenceAttendeeFinances',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Finances') ? [] : ['className' => FinancesTable::class];
        $this->Finances = $this->getTableLocator()->get('Finances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Finances);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FinancesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FinancesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
