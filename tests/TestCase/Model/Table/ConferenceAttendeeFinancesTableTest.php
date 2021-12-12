<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceAttendeeFinancesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceAttendeeFinancesTable Test Case
 */
class ConferenceAttendeeFinancesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceAttendeeFinancesTable
     */
    protected $ConferenceAttendeeFinances;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceAttendeeFinances',
        'app.Finances',
        'app.ConferenceAttendees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceAttendeeFinances') ? [] : ['className' => ConferenceAttendeeFinancesTable::class];
        $this->ConferenceAttendeeFinances = $this->getTableLocator()->get('ConferenceAttendeeFinances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceAttendeeFinances);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceAttendeeFinancesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceAttendeeFinancesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
