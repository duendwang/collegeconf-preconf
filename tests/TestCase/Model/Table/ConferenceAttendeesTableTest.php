<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceAttendeesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceAttendeesTable Test Case
 */
class ConferenceAttendeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceAttendeesTable
     */
    protected $ConferenceAttendees;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceAttendees',
        'app.Conferences',
        'app.Attendees',
        'app.Barcodes',
        'app.Lodgings',
        'app.Cancels',
        'app.CheckIns',
        'app.ConferenceAttendeeConferenceEvents',
        'app.OnsiteRegistrations',
        'app.Payments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceAttendees') ? [] : ['className' => ConferenceAttendeesTable::class];
        $this->ConferenceAttendees = $this->getTableLocator()->get('ConferenceAttendees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceAttendees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceAttendeesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceAttendeesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
