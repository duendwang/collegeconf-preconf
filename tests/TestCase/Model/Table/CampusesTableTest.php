<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampusesTable Test Case
 */
class CampusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampusesTable
     */
    protected $Campuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Campuses',
        'app.Attendees',
        'app.PotentialAttendees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Campuses') ? [] : ['className' => CampusesTable::class];
        $this->Campuses = $this->getTableLocator()->get('Campuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Campuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CampusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CampusesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
