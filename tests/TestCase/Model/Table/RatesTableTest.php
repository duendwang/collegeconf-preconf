<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RatesTable Test Case
 */
class RatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RatesTable
     */
    protected $Rates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Rates',
        'app.ConferenceLocations',
        'app.RateTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rates') ? [] : ['className' => RatesTable::class];
        $this->Rates = $this->getTableLocator()->get('Rates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Rates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
