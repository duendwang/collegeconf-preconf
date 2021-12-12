<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinanceTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinanceTypesTable Test Case
 */
class FinanceTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FinanceTypesTable
     */
    protected $FinanceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FinanceTypes',
        'app.Finances',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FinanceTypes') ? [] : ['className' => FinanceTypesTable::class];
        $this->FinanceTypes = $this->getTableLocator()->get('FinanceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FinanceTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FinanceTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FinanceTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
