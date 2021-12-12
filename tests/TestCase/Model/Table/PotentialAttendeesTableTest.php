<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PotentialAttendeesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PotentialAttendeesTable Test Case
 */
class PotentialAttendeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PotentialAttendeesTable
     */
    protected $PotentialAttendees;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PotentialAttendees',
        'app.Conferences',
        'app.Localities',
        'app.Campuses',
        'app.Statuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PotentialAttendees') ? [] : ['className' => PotentialAttendeesTable::class];
        $this->PotentialAttendees = $this->getTableLocator()->get('PotentialAttendees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PotentialAttendees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PotentialAttendeesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PotentialAttendeesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
