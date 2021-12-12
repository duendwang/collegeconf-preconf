<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceAttendeeConferenceEventsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceAttendeeConferenceEventsTable Test Case
 */
class ConferenceAttendeeConferenceEventsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceAttendeeConferenceEventsTable
     */
    protected $ConferenceAttendeeConferenceEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceAttendeeConferenceEvents',
        'app.ConferenceAttendees',
        'app.ConferenceEvents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceAttendeeConferenceEvents') ? [] : ['className' => ConferenceAttendeeConferenceEventsTable::class];
        $this->ConferenceAttendeeConferenceEvents = $this->getTableLocator()->get('ConferenceAttendeeConferenceEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceAttendeeConferenceEvents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceAttendeeConferenceEventsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceAttendeeConferenceEventsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
