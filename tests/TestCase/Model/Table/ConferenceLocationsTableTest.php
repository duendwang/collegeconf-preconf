<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceLocationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceLocationsTable Test Case
 */
class ConferenceLocationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceLocationsTable
     */
    protected $ConferenceLocations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceLocations',
        'app.Conferences',
        'app.LodgingFacilities',
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
        $config = $this->getTableLocator()->exists('ConferenceLocations') ? [] : ['className' => ConferenceLocationsTable::class];
        $this->ConferenceLocations = $this->getTableLocator()->get('ConferenceLocations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceLocations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceLocationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceLocationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
