<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RateTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RateTypesTable Test Case
 */
class RateTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RateTypesTable
     */
    protected $RateTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RateTypes',
        'app.Rates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RateTypes') ? [] : ['className' => RateTypesTable::class];
        $this->RateTypes = $this->getTableLocator()->get('RateTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RateTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RateTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RateTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
