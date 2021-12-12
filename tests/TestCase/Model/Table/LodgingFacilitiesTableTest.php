<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LodgingFacilitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LodgingFacilitiesTable Test Case
 */
class LodgingFacilitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LodgingFacilitiesTable
     */
    protected $LodgingFacilities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LodgingFacilities',
        'app.ConferenceLocations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LodgingFacilities') ? [] : ['className' => LodgingFacilitiesTable::class];
        $this->LodgingFacilities = $this->getTableLocator()->get('LodgingFacilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LodgingFacilities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LodgingFacilitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LodgingFacilitiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
